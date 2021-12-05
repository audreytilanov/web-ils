<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableContent;
use App\Models\ComponentIntro1;

class Intro1Controller extends Controller
{
    public function index()
    {
        $contents = ComponentIntro1::all();
        return view('backend.list-content-intro1', compact('contents'));
    }

    public function add_content()
    {
        return view('backend.add-content-intro1');
    }

    public function save_addcontent(Request $request)
    {
        $temp= TableContent::create([
            'nama_component'=>$request->nama_component,
            'status_aktif'=>$request->status_aktif
        ]);
        return redirect()->route('home_admin');
    }

    public function edit_content($id)
    {
        $contents = ComponentIntro1::where('id','=',$id)->get();
        return view('backend.edit-content-intro1', compact('contents'));
    }

    public function save_editcontent($id, Request $request)
    {
        $temp= TableContent::where('id','=',$id)->get();
        $temp->update([
            'nama_component'=>$request->nama_component,
            'status_aktif'=>$request->status_aktif
        ]);
        return redirect()->route('home_admin');
    }

    
}
