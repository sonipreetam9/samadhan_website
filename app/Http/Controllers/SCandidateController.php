<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class SCandidateController extends Controller
{
    public function candidate_list()
    {
        $users = User::orderBy('id','DESC')->get();

        return view('super_admin.all_candidate',compact('users'));
    }
}
