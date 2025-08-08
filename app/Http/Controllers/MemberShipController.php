<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffMemberModel;
use App\Models\MemberModel;
use App\Models\MemberFamilyModel;
use App\Models\MemberNominessModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberShipController extends Controller
{
    public function apply_member_form()
    {
        $members = StaffMemberModel::where('show_website', 1)->where('status', 1)->get();
        $page_title = "Apply Membership Form";
        return view('membership_form', compact('page_title', 'members'));
    }
    public function member_form_post(Request $request)
    {



        $validated = $request->validate([
            // Your existing validation rules (same as you already have)
            'email' => 'required|email|unique:members,email',
            'contact' => 'required|digits:10|unique:members,phone',
            'password' => 'required',
            'refer_number' => 'required',
            'applicant_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact' => 'required|digits:10',
            'caste' => 'required|string|max:50',
            'gender' => 'required|in:Male,Female',
            'education' => 'required|string|max:255',
            'marital_status' => 'required|string|max:50',
            'ration_card' => 'required|string|max:50',
            'aadhar' => 'required|digits:12',
            'bank_branch' => 'required|string|max:255',
            'bank_account_number' => 'required|numeric',
            'ifsc_code' => 'required|alpha_num|max:15',
            'family_registered_yes_no' => 'required|in:Yes,No',
            'place' => 'required|string|max:255',

            'dob' => 'required|date',
            'documents' => 'required|array|min:2',


            'member_name.*' => 'nullable|string|max:255',
            'relation.*' => 'nullable|string|max:255',
            'age.*' => 'nullable|numeric',
            'member_aadhar.*' => 'nullable|digits:12',
            'education_level.*' => 'nullable|string|max:255',
            'school_info.*' => 'nullable|string|max:255',

            'nominee_name.*' => 'nullable|string|max:255',
            'nominee_relation.*' => 'nullable|string|max:255',
            'nominee_age.*' => 'nullable|numeric',
            'nominee_amount.*' => 'nullable|numeric',
        ]);



        $random_part = strtoupper(Str::random(8)) . random_int(100, 999);

        // Get first 4 letters of the name in uppercase (no spaces)
        $name_prefix = strtoupper(Str::limit(preg_replace('/\s+/', '', $request->name), 3, ''));

        // Final TAG ID
        $final_tag = $name_prefix . $random_part;
        DB::beginTransaction();
        try {
            // ✅ Save main applicant data to MemberModel
            $member = MemberModel::create([
                'refer_member_tag' => $request->refer_number,
                'tag_id' => $final_tag,
                'name' => $request->applicant_name,
                'father_name' => $request->father_name,
                'address' => $request->address,
                'phone' => $request->contact,
                'email' => $request->email,
                'password' => base64_encode($request->password),
                'caste' => $request->caste,
                'sex' => $request->gender,
                'study' => $request->education,
                'married_status' => $request->marital_status,
                'rashan_card_number' => $request->ration_card,
                'aadhhar_card_number' => $request->aadhar,
                'bank_holder_name' => $request->applicant_name, // Assuming applicant is the holder
                'bank_account_number' => $request->bank_account_number,
                'bank_ifsc_code' => $request->ifsc_code,
                'bank_name' => $request->bank_branch,

                // Document checkboxes (convert to boolean yes/no or file link if uploaded)
                'aadhar_yes_no' => in_array('आधार कार्ड', $request->documents) ? 'yes' : 'no',
                'birth_yes_no' => in_array('स्कूल प्रमाण-पत्र', $request->documents) ? 'yes' : 'no',
                'rashon_card_yes_no' => in_array('राशन कार्ड', $request->documents) ? 'yes' : 'no',
                'voter_card__yes_no' => in_array('मतदाता पहचान पत्र', $request->documents) ? 'yes' : 'no',
                'dl_yes_no' => in_array('ड्राइविंग लाइसेंस', $request->documents) ? 'yes' : 'no',
                'pan_card_yes_no' => in_array('पैन कार्ड', $request->documents) ? 'yes' : 'no',
                'school_yes_no' => in_array('स्कूल प्रमाण-पत्र', $request->documents) ? 'yes' : 'no',
                'passport_yes_no' => in_array('पासपोर्ट', $request->documents) ? 'yes' : 'no',

                // Family registration (if applicable)
                'family_yes_no' => $request->family_registered_yes_no,
                'family_name' => $request->family_registered_yes_no === 'Yes' ? $request->family_member_name : null,
                'family_member_number' => $request->family_registered_yes_no === 'Yes' ? $request->family_registration_number : null,

                'date' => now(),
                'place' => $request->place,
                
                'dob' => $request->dob,
            ]);
            $phone = $request->contact;
            // ✅ Save Family Members
            if ($request->has('member_name')) {
                foreach ($request->member_name as $index => $memberName) {
                    if ($memberName) {
                        MemberFamilyModel::create([
                            'name' => $memberName,
                            'member_id' => $member->id,
                            'realtion' => $request->relation[$index],
                            'age' => $request->age[$index],
                            'aadhhar_card_number' => $request->member_aadhar[$index],
                            'study_level' => $request->education_level[$index],
                            'school_name' => $request->school_info[$index],
                            'file_link' => null, // If you allow file uploads later
                        ]);
                    }
                }
            }

            // ✅ Save Nominees
            if ($request->has('nominee_name')) {
                foreach ($request->nominee_name as $index => $nomineeName) {
                    if ($nomineeName) {
                        MemberNominessModel::create([
                            'name' => $nomineeName,
                            'member_id' => $member->id,
                            'nominee_relation' => $request->nominee_relation[$index],
                            'nominee_age' => $request->nominee_age[$index],
                            'nominee_amount' => $request->nominee_amount[$index],
                            'file_link' => null, // Placeholder if you allow uploads
                        ]);
                    }
                }
            }

            DB::commit();
            return redirect()->route('upload.membership.doc', ['tag_id' => $final_tag, 'phone' => $phone]);
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'कुछ गलत हो गया: ' . $e->getMessage());
        }
    }



    public function uploads_member_documents($tag_id, $phone)
    {
        $page_title = "Upload Documents";
        $application = MemberModel::where('phone', $phone)->where('tag_id', $tag_id)->first();
        if (!blank($application->image)) {
            return redirect()->route('pay.payment.membership', ['tag_id' => $tag_id]);
        }
        return view('upload_membership_doc', compact('application', 'page_title'));
    }
    public function uploads_member_documents_post(Request $request)
    {
        $request->validate([
            'tag_id' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            'sign' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            'docs.*' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $application = MemberModel::where('tag_id', $request->tag_id)->first();

        if (!$application) {
            return back()->with('error', 'Invalid Member Application');
        }

        // File Save Path
        $uploadPath = public_path('uploads/members/');

        // Upload image
        if ($request->hasFile('image')) {
            $imageName = 'image_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($uploadPath, $imageName);
            $application->image = 'uploads/members/' . $imageName;
        }

        // Upload sign
        if ($request->hasFile('sign')) {
            $signName = 'sign_' . time() . '.' . $request->file('sign')->getClientOriginalExtension();
            $request->file('sign')->move($uploadPath, $signName);
            $application->sign = 'uploads/members/' . $signName;
        }

        // Document field mapping
        $docFields = [
            'aadhar_yes_no' => 'aadhhar_link',
            'birth_yes_no' => 'birth_link',
            'rashon_card_yes_no' => 'rashon_card_link',
            'voter_card__yes_no' => 'voter_card_link',
            'dl_yes_no' => 'dl_link',
            'pan_card_yes_no' => 'pan_card_link',
            'school_yes_no' => 'school_link',
            'passport_yes_no' => 'passport_link',
        ];

        // Upload document files (only if 'yes' and file is present)
        if ($request->has('docs')) {
            foreach ($docFields as $yesField => $linkField) {
                if ($application->$yesField === 'yes' && isset($request->docs[$yesField])) {
                    $file = $request->docs[$yesField];
                    $filename = $yesField . '_' . time() . '.' . $file->getClientOriginalExtension();
                    $file->move($uploadPath, $filename);
                    $application->$linkField = 'uploads/members/' . $filename;
                }
            }
        }

        $application->save();

        return redirect()->route('pay.payment.membership', ['tag_id' => $request->tag_id]);
    }



    public function search_member_form()
    {
        $page_title = "Search Membership Form";
        return view('search_membership_form', compact('page_title'));
    }
    public function search_member_form_post(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:10',
            'tag_id' => 'required',
        ]);
        $application = MemberModel::where('phone', $request->phone)->where('tag_id', $request->tag_id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }

        if (blank($application->image)) {
            return redirect()->route('upload.membership.doc', ['tag_id' => $request->tag_id, 'phone' => $request->phone]);
        }
        if ($application->payment_status == 'pending') {
            return redirect()->route('pay.payment.membership', ['tag_id' => $request->tag_id]);
        }
        if ($application->payment_status == 'review') {
            return redirect()->route('pay.payment.membership', ['tag_id' => $request->tag_id]);
        }

        return redirect()->route('print.member.form', ['tag_id' => $request->tag_id]);
    }
    public function print_membership_form($tag_id)
    {

        $application = MemberModel::where('tag_id', $tag_id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }

        if (blank($application->image)) {
            return redirect()->route('upload.membership.doc', ['tag_id' => $tag_id, 'phone' => $application->phone]);
        }
        if ($application->payment_status == 'pending') {
            return redirect()->route('pay.payment.membership', ['tag_id' => $tag_id]);
        }
        if ($application->payment_status == 'failed') {
            return redirect()->route('pay.payment.membership', ['tag_id' => $tag_id]);
        }
        if ($application->payment_status == 'review') {
            return redirect()->route('home')->with('success', 'Plz wait your payment in review !!');
        }
        $familyMembers = MemberFamilyModel::where('member_id', $application->id)->get();
        $nomineeMembers= MemberNominessModel::where('member_id', $application->id)->get();
        // dd($familyMembers);
        return view('print_membership_form', compact('application','familyMembers','nomineeMembers'));
    }
}
