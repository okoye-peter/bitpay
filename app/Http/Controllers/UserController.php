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
        return view('edit_document', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|confirmed|string',
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
        
        return view('withdrawal', compact('walletID', 'user', 'investments'));
    }

    public function withdraw(Request $request)
    {
        $data = $request->validate([
            'withdraw' => 'required'
        ]);

        $investment = Investment::find($request->withdraw);
        // dd($investment->amount);
        if ($investment->withdraw->isEmpty()) {
            $withdraw   =   Withdraw::create([
                'user_id' => request()->user()->id,
                'amount' => $investment->amount
            ]);
            $investment->withdraw()->attach($withdraw);
        }
        return back()->with('success', 'request has been received');
        // $withdraw   =   new Withdraw;
        // $withdraw->user_id = \request()->user()->id;
        // $withdraw->amount = $request->amount;
        // $userInvestments = Investment::where('user_id', \request()->user()->id)->latest()->limit(2)->get();
        // if (!$userInvestments->isEmpty() ) {
        //     if ($userInvestments->count() < 2) {
        //         $withdraw->save();
        //         // $this->updatePendingWithdrawal();
        //         return back()->with('success', 'request has been received');
        //     } else {
        //         foreach ($userInvestments as $key => $userInvestment) {
        //             $current_time= Carbon::now();
        //             $invested_at= Carbon::parse($userInvestment->created_at);
        //             $plan_time = $userInvestment->investment_time;
        //             $time_to_wait = $invested_at->addHours($plan_time);
        //             $e = $current_time->greaterThanOrEqualTo($time_to_wait);
        //             if($e){
        //                 $withdraw->save();
        //                 // $this->updatePendingWithdrawal();
        //                 return back()->with('success', 'request has been received');
        //             }
        //         }
        //     }
            
        //     return back()->withErrors(['error'=>'your investment time hasn\'t elapsed']);
        // }
        // return back()->withErrors(['error' => 'You don\'t have any investment']);
    }

    public function updatePendingWithdrawal(){
        $pending_withdrawal = \request()->user()->withdraw->where('isPaid', 'pending')->sum('amount');
        auth()->user()->update(['pending_withdrawal', $pending_withdrawal]);
    }

    public function viewInvestment()
    {
        $user = Auth::user();
        return view('deposit_fund', compact('user'));
    }

    public function invest(Request $request)
    {
        // $plans = ['starter' => 12, 'basic' => 24, 'standard' => 48, 'premium' => 72];

        $invest =  Investment::create([
            'user_id' => \request()->user()->id,
            'investment_time' => $request->time,
            'amount' => $request->amount,
            'created_at' => Carbon::now()
        ]);

        // session()->flash('success', "The deposit has been saved. It will become active when the administrator checks statistics.");
        return redirect("/user/complete")->with('success', "The deposit has been saved. It will become active when the administrator checks statistics.");
    }

    public function pay(Request $request)
    {
        $datas = $request->validate([
            'plan' => 'required|string',
            'amount' => 'required',
        ]);

        $plans = ['starter' => 12, 'basic' => 24, 'standard' => 48, 'premium' => 72];
        $time = $plans[$datas['plan']];
        $profit = ['starter' => 120, 'basic' => 150, 'standard' => 350, 'premium' => 500];
        $userInvestments = Investment::where('user_id', \request()->user()->id)->latest()->limit(2)->get();

        // if (!$userInvestments->isEmpty()) {
        //     if ($userInvestments->count() < 2) {
        //         $data = [
        //             'profit' => $profit[$request->plan],
        //             'plans' => $request->plan,
        //             'time' => $plans[$request->plan],
        //             'amount' => $request->amount
        //         ];
        //         // return redirect("/user/pay")->with('success', $data);
        //         return view('deposit1', compact('data'));
        //     } else {
        //         foreach ($userInvestments as $key => $userInvestment) {
        //             # code...
        //             $current_time= Carbon::now();
        //             $invested_at= Carbon::parse($userInvestment->created_at);
        //             $plan_time = $userInvestment->investment_time;
        //             $time_to_wait = $invested_at->addHours($plan_time);
        //             $e = $current_time->greaterThanOrEqualTo($time_to_wait);
        //             if(!$e){
        //                 return back()->withErrors(['error'=>'your investments time hasn\'t elapsed']);
        //             }
        //         }
        //     }
        // }

        $data = [
            'profit' => $profit[$request->plan],
            'plans' => $request->plan,
            'time' => $plans[$request->plan],
            'amount' => $request->amount
        ];
        // return redirect("/user/pay")->with('success', $data);
        return view('deposit1', compact('data'));

    }

    public function viewInvestboard()
    {
        $user = Auth::user();
        return view('investboard', compact('user'));
    }
}
