<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Str;

class AuthController extends Controller
{
    public function login_page()
    {
        if (Auth::check()) {
            return redirect()->route('home.page');
        }
        return view('software.auth.login');
    }
    public function register_page()
    {

        if (Auth::check()) {
            return redirect()->route('home.page');
        }
        return view('software.auth.register');
    }
    public function check_login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/'],
        ], [
            'password.regex' => 'Password must contain only letters and numbers.'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard')->with('success', 'Logged in successfully!');
        }

        return redirect()->back()->with('error', 'Invalid login credentials!');
    }


    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $user->remember_token = null; // Remove Remember Token
            $user->save();
        }

        Auth::logout();



        return redirect()->route('login')->with('success', 'सफलतापूर्वक लॉगआउट किया गया!');
    }

    public function register_post(Request $request)
    {
        // Validate user input (Only letters and numbers allowed in password)


        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone|numeric|digits:10',
            'password' => [
                    'required',
                    'string',
                    'min:6',
                    'confirmed',
                    'regex:/^[a-zA-Z0-9@.]+$/'
                ],
        ], [
            'name.regex' => 'Name can only contain letters',
            'name.required' => 'Name is required.',
            'password.regex' => 'Password can only contain letters, numbers, @, and .',
            'password.confirmed' => 'Password confirmation does not match.',
            'password.min' => 'Password must be at least 6 characters.',
            'email.required' => 'Email is required.',
            'phone.required' => 'Phone number is required.',
            'phone.unique' => 'This phone number is already registered.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'phone.digits' => 'Phone number must be exactly 10 digits.',
        ]);
        // dd($request->all());

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'in_hash' => base64_encode($request->password),
            ]);

            return redirect()->route('login')->with('success-register', 'Successfully registered plese Login!');

        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', 'Registration failed: ' . $e->getMessage());
        }
    }

}








