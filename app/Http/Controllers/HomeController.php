<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableContent;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contents = TableContent::all();
        return view('backend.home', compact('contents'));
    }

    
}
