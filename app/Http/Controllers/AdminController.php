<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitcoins = Bitcoin::orderBy('created_at', 'desc')->get();

        return view('admin', compact('bitcoins'));
    }
}
