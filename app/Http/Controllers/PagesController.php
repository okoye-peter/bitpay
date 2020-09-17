<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function about()
    {
        return view('about');
    }

    public function rules()
    {
        return view('rules');
    }

    public function partners()
    {
        return view('partners');
    }

    public function investors()
    {
        return view('investors');
    }

    public function support()
    {
        return view('support');
    }

    public function passwordReset()
    {
        return view('password_reset');
    }

    public function faq()
    {
        return view('faq');
    }
}
