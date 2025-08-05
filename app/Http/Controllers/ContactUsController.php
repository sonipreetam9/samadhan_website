<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactUsController extends Controller
{
    public function contact_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'msg_subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'subject' => $request->msg_subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'आपका संदेश सफलतापूर्वक भेजा गया है।');
    }
}
