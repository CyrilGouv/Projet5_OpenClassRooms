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
        $bitcoins = Bitcoin::orderBy('created_at', 'desc')->paginate(10);

        return view('admin', compact('bitcoins'));
    }

    public function search(Request $request)
    {   
        $this->validate($request, [
            'search' => 'required'
        ]);
        
        $query = $request->search;
        $bitcoins = Bitcoin::where('name', 'like', '%'. $query .'%')->get();

        return view('search', compact('bitcoins', 'query'));
    }
}
