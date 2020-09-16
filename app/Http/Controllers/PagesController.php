<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index2');
    }

    public function login()
    {
        return view('login2');
    }

    public function register()
    {
        return view('register2');
    }

    public function about()
    {
        return view('about2');
    }

    public function contact()
    {
        return view('contact2');
    }

    public function history()
    {
        return view('history');
    }

    public function terms_and_conditions()
    {
        return view('t&c2');
    }

    public function news()
    {
        return view('company_news');
    }

    public function passwordReset()
    {
        return view('passwordReset');
    }

    public function faq()
    {
        return view('faq2');
    }

    public function iframe()
    {
        return view('deposit_iframe');
    }
    public function deposit_save()
    {
        return view('deposit_saved');
    }
}
