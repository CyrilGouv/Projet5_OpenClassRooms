<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;

class PagesController extends Controller
{
    public function index() {
        $count = Bitcoin::all()->count();
        
        return view('home', compact('count'));
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
