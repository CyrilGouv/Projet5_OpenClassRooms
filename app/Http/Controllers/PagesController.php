<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('home');
    }

    public function more() {
        return view('more');
    }

    public function contact() {
        return view('contact');
    }

    public function mentions() {
        return view('mentions-legales');
    }
}
