<?php

namespace App\Http\Controllers;

use App\Models\ChildComponentPantai;
use App\Models\ComponentDesa;
use App\Models\ComponentFood;
use App\Models\ComponentPantai;
use App\Models\ComponentPura;
use App\Models\ComponentSejarah;
use App\Models\ComponentWisataHiburan;
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

    // LIST CONTENT

    public function sejarah(){
        $content = TableContent::where('nama_component','=', 'sejarah')->get()->first();
        // dd
        $sejarah = ComponentSejarah::where('status_aktif','=','1')->get();
        $judul = $content->nama_component;
        return view('pages.list.sejarah', compact('judul','sejarah'));
    }

    public function wisata(){
        $content = ComponentWisataHiburan::where('status_aktif','=','1')->get();
        $judul = "Wisata Hiburan";
        return view('pages.list.wisata', compact('judul','content'));
    }

    public function pantai(){
        $content = ComponentPantai::where('status','=','sub')->where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Pantai";
        return view('pages.list.pantai', compact('judul','content'));
    }

    public function desa(){
        $content = ComponentDesa::where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Desa";
        return view('pages.list.desa', compact('judul','content'));
    }

    public function pura(){
        $content = ComponentPura::where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Pura";
        return view('pages.list.pura', compact('judul','content'));
    }

    public function makanan(){
        $content = ComponentFood::where('status','=','sub')->where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Makanan";
        return view('pages.list.makanan', compact('judul','content'));
    }


    // DETAIL CONTENT

    public function sejarahDetail($slug, $id){
        // dd
        $sejarah = ComponentSejarah::find($id);
        $sejarahLimit = ComponentSejarah::orderBy('created_at', 'DESC')->limit(3)->get();

        // dd($sejarahLimit);
        $judul = "Sejarah";
        return view('pages.detail.sejarah', compact('sejarah','judul', 'sejarahLimit'));
    }

    public function wisataDetail($slug, $id){
        // dd
        $content = ComponentWisataHiburan::find($id);
        $contentLimit = ComponentWisataHiburan::orderBy('created_at', 'DESC')->limit(3)->get();

        // dd($sejarahLimit);
        $judul = "Wisata Hiburan";
        return view('pages.detail.wisata', compact('content','judul', 'contentLimit'));
    }
}
