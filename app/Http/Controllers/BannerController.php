<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentBanner;

class BannerController extends Controller
{
    public function index()
    {
        $contents = ComponentBanner::all();
        return view('backend.banner.index', compact('contents'));
    }

    public function add_content()
    {
        return view('backend.add-content-intro1');
    }

    public function save_addcontent(Request $request)
    {
        // 'title', 'desc_left', 'desc_right'
        $temp= ComponentIntro1::create([
            'title'=>$request->title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right
        ]);
        // dd($temp);
        return redirect()->route('list_intro1')->with('success', 'Berhasil Menambahkan Konten Intro 1');;
    }

    public function edit_content($id)
    {
        $contents = ComponentBanner::where('id','=',$id)->get();
        return view('backend.banner.edit', compact('contents'));
    }

    public function save_editcontent($id, Request $request)
    {
        $temp= ComponentIntro1::where('id','=',$id)->get()->first();
        // dd($request);
        $temp->update([
            'title'=>$request->title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right,
            'status_aktif'=>$request->status_aktif
        ]);
        return redirect()->route('list_intro1')->with('success', 'Berhasil Mengubah Konten Intro 1');;
    }

    public function delete_content($id){
        $data = ComponentIntro1::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('list_intro1')->with('success', 'Berhasil Menghapus Konten Intro 1');;

    }
}
