<?php

namespace App\Http\Controllers;

use App\Investment;
use App\Jobs\AdminSendEmailJob;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminSendMail;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function showForm()
    {
        return view('admin.form');
    }

    public function superView()
    {
        $users = User::where('isadmin', 0)->with('investment')->latest()->get();
        $investments = Investment::latest()->get();
        $withdraws   =   Withdraw::orderBy('id', 'DESC')->get();
//        $investments = Investment::where('status', 'pending')->latest()->get();
//        $withdraws   =   Withdraw::where('isPaid', 'pending')->orderBy('id', 'DESC')->get();

        return view('admin.dashboard',compact('withdraws','users','investments'));
    }

    public function investment(Request $request)
    {
        $clientid = $request->clientID;
        $client = User::where('clientID',$clientid)->first();
        if(!$client){
            return back()->with('error','Opps ! wrong Client ID');
        }
        $data = $request->validate([
            'account_balance' => 'required|string',
            'earned_total' => 'required|string',
            'pending_withdrawal' => 'required|string',
            'withdraw_total' => 'required|string',
            'active_deposit' => 'required|string',
        ]);

        // dd($request->all());
        // $client->total_investment =$request->totalInvestment;
        // $client->total_profit = $request->totalProfit;
        // $client->referral_bonus = $request->referral_bonus;
        // $client->save();
        $client->update($data);
        return back()->with('success','user details updated pdated successfully');
    }

    public function showMailForm()
    {
        return view('admin.email');
    }

    public function mail(Request $request)
    {
        $data   =   $request->validate([
            'email' => 'required|string|email',
            'title' => 'required|string',
            'message' => 'required|string',
        ]);
        dispatch(new AdminSendEmailJob($data));

        return back()->with('success','email sent successfully');
    }

    public function update(Investment $investment,Request $request){
        $investment->update([
            'status' => $request->action
        ]);
        // $invest = $investment->user->investment->where('status', 'approve')->sum('amount');
        // $investment->user()->update(['active_deposit'=>$invest]);
        return back()->with('success','investment updated successfully');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success','user deleted');
    }

    public function updateWithdraw(Withdraw $withdraw,Request $request){
        $withdraw->update(['isPaid' => $request->action]);
        // $total_withdraw = $withdraw->user->withdraw->where('isPaid', 'approve')->sum('amount');
        // $withdraw->user()->update(['withdraw_total' => $total_withdraw]);
        return back()->with('success','Updated successfully');
    }

    public function updateCompanyBonus(Request $request)
    {
        $data = $request->validate([
            'clientID' => 'required|string|exists:users',
            'company_bonus' => 'required|string'
        ]);

        $user = User::where('clientID', $data['clientID'])->first();
        if ($user) {
            $user->update([
                'company_bonus' => $data['company_bonus']
            ]);
            return back()->with('success', 'Client company bonus updated successfully');
        }

        return back()->withErrors(['error' => 'Oops! something went wrong']);

    }

    public function subAdmin()
    {
        return view('SupAdmin');
    }

}
