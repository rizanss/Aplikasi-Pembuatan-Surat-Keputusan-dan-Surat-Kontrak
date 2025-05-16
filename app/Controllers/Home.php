<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function beranda()
    {
        return view('index');
    }

    public function virtual()
    {
        return view('virtual-reality');
    }

    public function rtl(){
        return view('rtl');
    }

    public function profile()
    {
        return view('profile');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function layout()
    {
        return view('layout/layout-admin');
    }
}
