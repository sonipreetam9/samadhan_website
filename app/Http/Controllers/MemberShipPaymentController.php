<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberModel;

class MemberShipPaymentController extends Controller
{
    public function pay_membership_payment($tag_id)
    {
        $application = MemberModel::where('tag_id', $tag_id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }
        $page_title = "Pay Membership Fees";
        return view('memberShipPayment', compact('tag_id', 'page_title','application'));
    }
    public function pay_membership_payment_post(Request $request)
    {

        $request->validate([
            'tag_id' => 'required',
            'utr' => 'required',
            'screenshot' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($request->all());
        $application = MemberModel::where('tag_id', $request->tag_id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }
        // Handle screenshot upload
        if ($request->hasFile('screenshot')) {
            $file = $request->file('screenshot');
            $filename = time() . '_screenshot.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads'); // Ensure this path exists and is writable
            $file->move($uploadPath, $filename);
            $payment_proof = 'uploads/' . $filename;
        }

        // Save UTR number
        $payment_utr = $request->utr;


        $application->payment_proof = $payment_proof;
        $application->payment_utr = $payment_utr;
        $application->payment_status = "review";
        $application->save();

        return redirect()->route('home')->with('success', 'Payment proof uploaded successfully plese wait for verify !!');
    }



 public function new_payment_list_member_ship()
    {
       $new_payment_list = MemberModel::where('payment_status', 'pending')
    ->whereNotNull('payment_utr')
    ->where('payment_utr', '!=', '')
    ->orderBy('id', 'DESC')
    ->get();

       return view('super_admin.new_payments_membership', compact('new_payment_list'));
    }
   public function update_payment_status_membership($id, $status)
{
    // Validate allowed statuses
    $allowedStatuses = ['pending', 'completed', 'failed', 'review'];

    if (!in_array($status, $allowedStatuses)) {
        return redirect()->back()->with('error', 'Invalid payment status!');
    }

    // Get and update record
    $job = MemberModel::findOrFail($id);
    $job->payment_status = $status;
    $job->save();

    return redirect()->back()->with('success', 'Payment status updated successfully!');
}

}
