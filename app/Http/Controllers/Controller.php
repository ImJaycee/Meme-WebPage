<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Auth\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function logout(Request $request){
            // auth()->logout();
            // $request->session()->invalidate();
            // $request->session()->regenerateToken();
            session()->flush();
            
            return redirect('/');
    }

    public function loginprocess(Request $request)
    {

        $validated = $request->validate([
            "email" => ['required','email'],
            'password' => ['required','min:8'],
        ]);

        if ($validated['email'] == "sample@gmail.com" && $validated['password'] == "password") {
          
        
            $request->session()->regenerate(); // Create session
            session(['login' => 'user']); // Store email in session
            return redirect('/login'); // Redirect to the dashboard or any desired page
        }
         
        return back()->withErrors([ //login failed
            'email' => 'Invalid Credentials'
        ])->onlyInput('email');
    }
    public function dashboard(){
        return view('main.dashboard');
    }

}
