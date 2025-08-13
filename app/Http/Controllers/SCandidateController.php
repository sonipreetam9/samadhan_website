<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApplyedJobDocumentModel;
use App\Models\ApplyedJobModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactModel;

class SCandidateController extends Controller
{
    public function candidate_list()
    {
        $users = User::orderBy('id', 'DESC')->get();

        return view('super_admin.all_candidate', compact('users'));
    }
    public function contact_list()
    {
        $contacts = ContactModel::orderBy('id', 'DESC')->get();

        return view('super_admin.all_contact_list', compact('contacts'));
    }
    public function view_candidate($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $applyed_jobs = ApplyedJobModel::where('user_id', $id)->get();



        return view('super_admin.view_candidate_applyed_list', compact('user', 'applyed_jobs'));
    }
    public function view_candidate_appyled_job($jobId)
    {

        $job = ApplyedJobModel::find($jobId);
        if (!$job) {
            return redirect()->back()->with('error', 'Job not found');
        }
        $job_docs = ApplyedJobDocumentModel::where('apply_job_id', $job->id)->get();
        // dd($job_docs);


        return view('super_admin.view_candidate_applyed_job', compact('job','job_docs'));
    }
}
