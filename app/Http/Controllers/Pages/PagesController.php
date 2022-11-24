<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Sociallinks;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $sociallinks = Sociallinks::first();
        return view('home', [
            'social' => $sociallinks
        ]);
    }
    public function tailorbenefits()

    {
        $sociallinks = Sociallinks::first();
        return view('pages.general.tailor', [
            'social' => $sociallinks
        ]);
    }
    public function about()
    {
        $sociallinks = Sociallinks::first();
        return view('pages.general.about', [
            'social' => $sociallinks
        ]);

    }
    public function usersbenefits()
    {
        $sociallinks = Sociallinks::first();
        return view('pages.general.users', [
            'social' => $sociallinks
        ]);
    }
    public function register()
    {
        return view('pages.guests.register');
    }
    public function login()
    {
        return view('pages.guests.login');
    }
    public function email()
    {
        return view('pages.general.email');
    }
}
