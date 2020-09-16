<?php

namespace App\Http\Controllers;

use App\Events\PasswordResetEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasswordResetController extends Controller
{
    public function sendResetLink(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        event(new PasswordResetEvent($data['email']));

        return back()->with('success', 'check your mail for password reset link');
    }

    public function showResetForm(Request $request)
    {
        $row = \DB::table('password_resets')->select('email')->where('token', $request->code)->first();
        if($row){
            return view('Resetpassword', compact('row'));
        }
        return redirect('/password/reset')->withErrors(['error' => 'invalid access token']);

    }

    public function Reset(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed'
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::where('email', $data['email'])->first();
        $user->update(['password' => $data['password']]);

        return redirect('/login')->with('success', 'Password reset succcessfully you can now login');
    }
}
