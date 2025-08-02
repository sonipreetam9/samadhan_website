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

        $required_qlicfiction_doc = ApplyedJobDocumentModel::where('apply_job_id', $applyed_id)->get();

       return view('software.pay_form_fee', compact('applyed_id','vacancy_id'));
    }
}
