<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use JavaScript;

class PagesController extends Controller
{
    public function index() {
        $count = Bitcoin::count();
        
        $bitcoins = Bitcoin::all();
        // Permet d'avoir accès aux données dans le js
        JavaScript::put(compact('bitcoins'));

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
