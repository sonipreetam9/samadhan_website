<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplyedJobModel;
use App\Models\ApplyedJobDocumentModel;

class PaymentController extends Controller
{
    public function payment_page($applyed_id, $vacancy_id)
    {
        $applyed_job = ApplyedJobModel::where('user_id', Auth::user()->id)
            ->where('id', $applyed_id)
            ->where('vacancy_id', $vacancy_id)
            ->first();

        if (!$applyed_job) {
            return redirect()->route('user.apply.job.list')->with('error', 'You have not applied for this vacancy.');
        }

        // ✅ सही तरीका: दोनों fields null/empty ना हों
        if (!empty($applyed_job->payment_utr) && !empty($applyed_job->payment_proof)) {
            return redirect()->route('user.select.vacancy.form.list')
                ->with('success', 'Payment proof uploaded successfully, please wait for verification! You have already applied for this vacancy.');
        }

        $required_qlicfiction_doc = ApplyedJobDocumentModel::where('apply_job_id', $applyed_id)->get();

        return view('software.pay_form_fee', compact('applyed_id', 'vacancy_id', 'applyed_job'));
    }

    public function payment_post(Request $request, $applyed_id, $vacancy_id)
    {
        // Validate required fields
        $request->validate([
            'utr' => 'required',
            'screenshot' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the applied job record
        $applyed_job = ApplyedJobModel::where('user_id', Auth::user()->id)
            ->where('id', $applyed_id)
            ->where('vacancy_id', $vacancy_id)
            ->first();

        // If no such job found, redirect
        if (!$applyed_job) {
            return redirect()->route('user.apply.job.list')->with('error', 'You have not applied for this vacancy.');
        }

        // Handle screenshot upload
        if ($request->hasFile('screenshot')) {
            $file = $request->file('screenshot');
            $filename = time() . '_screenshot.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads'); // Ensure this path exists and is writable
            $file->move($uploadPath, $filename);
            $applyed_job->payment_proof = 'uploads/' . $filename;
        }

        // Save UTR number
        $applyed_job->payment_utr = $request->utr;

        // Save changes to the model
        $applyed_job->save();

        return redirect()->route('user.select.vacancy.form.list')->with('success', 'Payment proof uploaded successfully plese wait for verify !!');
    }

    public function new_payment_list()
    {
       $new_payment_list = ApplyedJobModel::where('payment_status', 'pending')
   
    ->orderBy('id', 'DESC')
    ->get();

       return view('super_admin.new_payments', compact('new_payment_list'));
    }
   public function update_payment_status($id, $status)
{
    // Validate allowed statuses
    $allowedStatuses = ['pending', 'completed', 'failed', 'review'];

    if (!in_array($status, $allowedStatuses)) {
        return redirect()->back()->with('error', 'Invalid payment status!');
    }

    // Get and update record
    $job = ApplyedJobModel::findOrFail($id);
    $job->payment_status = $status;
    $job->save();

    return redirect()->back()->with('success', 'Payment status updated successfully!');
}

}
