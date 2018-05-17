<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use JavaScript;

class PagesController extends Controller
{
    public function index() {
        $bitcoins = Bitcoin::all();
        $count = $bitcoins->count();
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
