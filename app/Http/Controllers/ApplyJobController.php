<?php

namespace App\Http\Controllers;

use App\Models\VacancyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplyedJobModel;
use App\Models\ApplyedJobDocumentModel;
use Illuminate\Support\Facades\App;

class ApplyJobController extends Controller
{
    public function vacancy_applying_form($vacancyID)
    {
        $vacancy = VacancyModel::where('status', 1)->where('vacancy_number', $vacancyID)->with('advertisement')->first();
        // dd("helooggggg",$vacancy);
        return view('software.job_apply_form', compact('vacancy'));
    }
    public function vancany_apply_post(Request $request)
    {
        $request->validate([
            'advertisement_no' => 'required|string|max:20',
            'category_no' => 'required|string|max:20',
            'post_name' => 'required|string|max:100',
            'vancancy_id' => 'required|string|max:100',

            'candidate_name' => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
            'father_name' => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',

            'dob_day' => 'required|digits:2|min:1|max:31',
            'dob_month' => 'required|digits:2|min:1|max:12',
            'dob_year' => 'required|digits:4|integer|min:1900|max:' . date('Y'),

            'sex' => 'required|in:Male,Female,Other',
            'category' => 'required|string|max:20',
            'domicile' => 'required|in:Yes,No',
            'nationality' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'pincode' => 'required|digits:6',

            // Education array validation
            'edu.10th.year' => 'nullable|digits:4',
            'edu.10th.marks' => 'nullable|numeric',
            'edu.10th.total' => 'nullable|numeric',
            'edu.10th.percent' => 'nullable|numeric',
            'edu.10th.division' => 'nullable|string|max:20',
            'edu.10th.board' => 'nullable|string|max:100',
            'edu.10th.subjects' => 'nullable|string|max:200',

            'edu.10+2.year' => 'nullable|digits:4',
            'edu.10+2.marks' => 'nullable|numeric',
            'edu.10+2.total' => 'nullable|numeric',
            'edu.10+2.percent' => 'nullable|numeric',
            'edu.10+2.division' => 'nullable|string|max:20',
            'edu.10+2.board' => 'nullable|string|max:100',
            'edu.10+2.subjects' => 'nullable|string|max:200',

            'edu.ITI.year' => 'nullable|digits:4',
            'edu.ITI.marks' => 'nullable|numeric',
            'edu.ITI.total' => 'nullable|numeric',
            'edu.ITI.percent' => 'nullable|numeric',
            'edu.ITI.division' => 'nullable|string|max:20',
            'edu.ITI.board' => 'nullable|string|max:100',
            'edu.ITI.subjects' => 'nullable|string|max:200',

            'edu.Diploma.year' => 'nullable|digits:4',
            'edu.Diploma.marks' => 'nullable|numeric',
            'edu.Diploma.total' => 'nullable|numeric',
            'edu.Diploma.percent' => 'nullable|numeric',
            'edu.Diploma.division' => 'nullable|string|max:20',
            'edu.Diploma.board' => 'nullable|string|max:100',
            'edu.Diploma.subjects' => 'nullable|string|max:200',

            'edu.Graduation.year' => 'nullable|digits:4',
            'edu.Graduation.marks' => 'nullable|numeric',
            'edu.Graduation.total' => 'nullable|numeric',
            'edu.Graduation.percent' => 'nullable|numeric',
            'edu.Graduation.division' => 'nullable|string|max:20',
            'edu.Graduation.board' => 'nullable|string|max:100',
            'edu.Graduation.subjects' => 'nullable|string|max:200',

            'edu.Post-Graduation.year' => 'nullable|digits:4',
            'edu.Post-Graduation.marks' => 'nullable|numeric',
            'edu.Post-Graduation.total' => 'nullable|numeric',
            'edu.Post-Graduation.percent' => 'nullable|numeric',
            'edu.Post-Graduation.division' => 'nullable|string|max:20',
            'edu.Post-Graduation.board' => 'nullable|string|max:100',
            'edu.Post-Graduation.subjects' => 'nullable|string|max:200',

            'other_qualification' => 'nullable|string|max:255',

            'exp_years' => 'nullable|integer|min:0|max:50',
            'exp_months' => 'nullable|integer|min:0|max:11',
            'exp_days' => 'nullable|integer|min:0|max:31',

            'visible_mark' => 'nullable',
            'declaration' => 'required|string|min:10',
            'place' => 'required|string|max:100',
            'form_date' => 'required|date|before_or_equal:today',
        ]);


        $vacancy_id = $request->vancancy_id;
        $user_id = Auth::user()->id;
        $already_applyed = ApplyedJobModel::where('user_id', $user_id)->where('vacancy_id', $vacancy_id)->get();

        if (count($already_applyed) > 0) {

            return redirect()->back()->with('error-al', 'You have already applied for this vacancy.');
        }



        // 1. Save main candidate data
        $job = new ApplyedJobModel();
        $job->user_id = Auth::user()->id;
        $job->vacancy_id = $request->vancancy_id; // if you have vacancy id, set it here
        $job->advertisement_no = $request->advertisement_no;
        $job->category_no = $request->category_no;
        $job->post_name = $request->post_name;
        $job->candidate_name = $request->candidate_name;
        $job->father_name = $request->father_name;
        $job->dob_day = $request->dob_day;
        $job->dob_month = $request->dob_month;
        $job->dob_year = $request->dob_year;
        $job->sex = $request->sex;
        $job->category = $request->category;
        $job->domicile = $request->domicile;
        $job->nationality = $request->nationality;
        $job->address = $request->address;
        $job->pincode = $request->pincode;
        $job->other_qualification = $request->other_qualification;
        $job->exp_years = $request->exp_years;
        $job->exp_months = $request->exp_months;
        $job->exp_days = $request->exp_days;
        $job->visible_mark = $request->visible_mark;
        $job->declaration = $request->declaration;
        $job->place = $request->place;
        $job->form_date = $request->form_date;

        // Optional fields — adjust if applicable
        $job->domicial_yes_no = $request->domicile ?? null;
        $job->phc_type = $request->phc_type ?? null;
        $job->aadhar_card = $request->aadhar_card ?? null;
        $job->pan_card = $request->pan_card ?? null;
        $job->caste = $request->caste ?? null;
        $job->passport_image = $request->passport_image ?? null;
        $job->domicial = $request->domicial ?? null;
        $job->eligibility_1 = $request->eligibility_1 ?? null;
        $job->eligibility_2 = $request->eligibility_2 ?? null;
        $job->sign = $request->sign ?? null;

        $job->save();

        if (!empty($request->edu)) {
            foreach ($request->edu as $eduName => $eduDetails) {
                // Check: at least one key value must be filled to consider this entry valid
                $hasAnyData = false;
                foreach ($eduDetails as $val) {
                    if (!empty($val)) {
                        $hasAnyData = true;
                        break;
                    }
                }

                if ($hasAnyData) {
                    $doc = new ApplyedJobDocumentModel();
                    $doc->apply_job_id = $job->id;
                    $doc->education_name = $eduName;
                    $doc->year = $eduDetails['year'] ?? null;
                    $doc->marks = $eduDetails['marks'] ?? null;
                    $doc->total = $eduDetails['total'] ?? null;
                    $doc->percent = $eduDetails['percent'] ?? null;
                    $doc->division = $eduDetails['division'] ?? null;
                    $doc->board = $eduDetails['board'] ?? null;
                    $doc->subjects = $eduDetails['subjects'] ?? null;
                    $doc->file_link = $eduDetails['file_link'] ?? null;
                    $doc->save();
                }
            }
        }


        return redirect()->route('user.upload.documents', ['applyed_id' => $job->id, 'vacancy_id' => $vacancy_id])->with('success-form', 'Form submitted successfully!');
    }

    public function applyed_job_list()
    {
        dd("heloo");
        return view('apply-job');
    }
    public function upload_documents_form($applyed_id, $vacancy_id)
    {

        $applyed_job=ApplyedJobModel::where('user_id',Auth::user()->id)->where('id',$applyed_id)->first();
        if(!$applyed_job){
            return redirect()->route('user.applyed.job.list')->with('error', 'You have not applied for this vacancy.');
        }

        $required_doc=ApplyedJobDocumentModel::where('apply_job_id', $applyed_id)->get();
        dd($required_doc);

        return view('software.upload_documents', compact('applyed_job', 'vacancy_id'));
    }
}
