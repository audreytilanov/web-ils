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

    public function view_detailBlog(){
        return view('pages.detail-blog');
    }

    public function view_listBlog(){
        return view('pages.list-blog');
    }
}
