<?php

namespace App\Http\Controllers;

use App\Investment;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $user = Auth::user();
        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'walletID' => 'required|string',
        ]);
        $data['password'] = Hash::make($data['password']);
        
        Auth::user()->update($data);
        return back()->with('success', 'profile updated successfully');
    }

    public function dashboard()
    {
        $user = Auth::user();        
        return view('user_dashboard', compact('user'));
    }

    public function viewWithdraw()
    {
        $user = Auth::user();
        $walletID = Auth::user()->walletID;
        
        $investments = $user->investment->where('status', 'approve')->filter(function($investment){
            return ($investment->withdraw->isEmpty() == true || $investment->withdraw->first()->isPaid == 'pending');
        });

        $sumPendingWithdraws = $investments->sum('amount');
        
        return view('withdrawal', compact('walletID', 'user', 'investments', 'sumPendingWithdraws'));
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'withdraw' => 'required'
        ]);

        $investment = Investment::find($request->withdraw);
        $dateCreated =  Carbon::parse($investment->updated_at);
        $dateCreated->addHours($investment->investment_time);
        $dateDiff = Carbon::now()->diff($dateCreated, false);
        if ($investment->withdraw->isEmpty() && $dateDiff->invert === 1) {
            $withdraw   =   Withdraw::create([
                'user_id' => request()->user()->id,
                'amount' => ($investment->amount + (((int)$investment->profit_rate / 100) * (int)$investment->amount))
            ]);
            $investment->withdraw()->attach($withdraw);
            return back()->with('success', 'request has been received');
        }
        return back()->withErrors(['error' => 'Oops!, sorry Investment Time hasn\'t elapsed']);
    }


    public function updatePendingWithdrawal(){
        $pending_withdrawal = \request()->user()->withdraw->where('isPaid', 'pending')->sum('amount');
        auth()->user()->update(['pending_withdrawal', $pending_withdrawal]);
    }

    public function invest(Request $request)
    {
        $request->validate([
            'plan' =>'required|string',
            'amount' => 'required|string'
        ]);

        $plans = ['120' => 12, '50' => 24, '150' => 24, '350' => 48, '500' => 72];
        
        Investment::create([
            'user_id' => \request()->user()->id,
            'investment_time' => $plans[$request->plan],
            'profit_rate' => $request->plan,
            'amount' => $request->amount,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', "The deposit has been saved. It will become active when the administrator checks statistics.");
    }

    public function pay(Request $request)
    {
        $datas = $request->validate([
            'plan' => 'required|string',
            'amount' => 'required',
        ]);

        $plans = ['120' => 12, '50' => 24, '150' => 24, '350' => 48, '500' => 72];
        $time = $plans[$datas['plan']];
        $userInvestments = Investment::where('user_id', \request()->user()->id)->latest()->limit(2)->get();

        $data = [
            'profit' => '',
            'plans' => $request->plan,
            'time' => $plans[$request->plan],
            'amount' => $request->amount
        ];
        // return redirect("/user/pay")->with('success', $data);
        return view('deposit1', compact('data'));

    }

    public function activeDeposit()
    {
        $user = Auth::user();
        $deposits = $user->investment->where('status', 'approve');
        return view('active_deposit', compact('user', 'deposits'));
    }
    

    public function history()
    {
        $user = Auth::user();
        return view('history', compact('user'));
    }
}
