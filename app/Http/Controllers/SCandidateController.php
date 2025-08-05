<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactModel;
class SCandidateController extends Controller
{
    public function candidate_list()
    {
        $users = User::orderBy('id','DESC')->get();

        return view('super_admin.all_candidate',compact('users'));
    }
    public function contact_list()
{
    $contacts = ContactModel::orderBy('id', 'DESC')->get();

    return view('super_admin.all_contact_list', compact('contacts'));
}
}
