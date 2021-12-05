<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableContent;

class UserController extends Controller
{
    public function index(){
        $contents = TableContent::all();
        return view('pages.home')->with(compact('contents'));
    }
}
