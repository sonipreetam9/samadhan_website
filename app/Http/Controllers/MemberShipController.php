<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberShipController extends Controller
{
   public function apply_member_form(){
    $page_title="Apply Membership Form";
    return view('membership_form',compact('page_title'));
   }
   public function member_form_post(Request $request){
    dd($request->all());
   }
}
