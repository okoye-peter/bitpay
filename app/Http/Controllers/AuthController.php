<?php

namespace App\Http\Controllers;

use App\Jobs\AdminSendEmailJob;
use App\Jobs\SignUpSendEmailJob;
use App\Mail\AdminSendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserRegisterMail;
class AuthController extends Controller
{

    public function register(Request $request)
    {
        $data   =   $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'walletID' => 'required|string|unique:users',
            'full_name' => 'required|string',
            'secret_question' => 'required|string',
            'secret_answer' => 'required|string',
        ]);

            $user = User::create([
                'username' => $data['username'],
                'clientID'  => $data['username'].uniqid(),
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'walletID' => $data['walletID'],
                'secret_question' => $data['secret_question'],
                'secret_answer' => $data['secret_answer'],
                'full_name' => $data['full_name']
            ]);
            if($user){
                $this->dispatch(new SignUpSendEmailJob($user));

                return redirect('/login')->with('success',' registration successful,');
            }
        return back()->with('error','Registration Failed');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['min:5', 'required']
        ]);
        if (auth()->attempt(array('email' => $data['email'], 'password' => $data['password']))) {
            return redirect('/user/user_dashboard');
        }
        return back()->withErrors(["error"=> "Invalid login credentials"]);

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
