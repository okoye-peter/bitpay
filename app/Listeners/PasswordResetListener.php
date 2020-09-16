<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use App\Mail\PasswordResetMail;
use App\Events\PasswordResetEvent;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PasswordResetListener
{
    

    /**
     * Handle the event.
     *
     * @param  PasswordResetEvent  $event
     * @return void
     */
    public function handle(PasswordResetEvent $event)
    {
        $code = Str::random(30);
        DB::insert('insert into password_resets (email,token, created_at) values(?,?,?)', [$event->email,$code,Carbon::now()]);
        Mail::to($event->email)->send(new PasswordResetMail($code));
    }
}
