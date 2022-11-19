<?php

namespace App\Http\Controllers;

use App\Models\ChildComponentPantai;
use App\Models\ComponentDesa;
use App\Models\ComponentFood;
use App\Models\ComponentPantai;
use App\Models\ComponentPembangunan;
use App\Models\ComponentPura;
use App\Models\ComponentSejarah;
use App\Models\ComponentWisataHiburan;
use Illuminate\Http\Request;
use App\Models\TableContent;

class UserController extends Controller
{
    public function index(){
        $contentMobil = ComponentDesa::where('status_aktif','=','1')->get();
        $content = ComponentFood::where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Paket Wisata Bali Drive Tour";
        return view('pages.home', compact('judul','content', 'contentMobil'));
    }

    public function indexAbout(){
        $content = ComponentFood::where('status','=','sub')->where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Paket Wisata Bali Drive Tour";
        return view('pages.list.about', compact('judul','content'));
    }

    public function indexMakanan(){
        $content = ComponentWisataHiburan::where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Paket Wisata Bali Drive Tour";
        return view('pages.list.food', compact('judul','content'));
    }

    public function indexPaket(){
        $content = ComponentFood::where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Paket Wisata Bali Drive Tour";
        return view('pages.list.paket', compact('judul','content'));
    }

    public function indexHubungi(){
        $judul = "Paket Wisata Bali Drive Tour";
        return view('pages.list.hubungi', compact('judul'));
    }

    public function indexBook(){
        $judul = "Paket Wisata Bali Drive Tour";
        return view('pages.list.book', compact('judul'));
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
        $content = ComponentPantai::where('status_tingkatan','=','sub')->where('status_aktif','=','1')->get();
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

    public function pembangunan(){
        $content = ComponentPembangunan::where('status_aktif','=','1')->get();
        // $contentImage = ChildComponentPantai::where('parent_id','=',$content->id)->get()->first();
        $judul = "Pembangunan";
        return view('pages.list.pembangunan', compact('judul','content'));
    }


    // DETAIL CONTENT

    public function sejarahDetail($slug){
        // dd
        $sejarah = ComponentSejarah::where('slug','=', $slug)->get()->first();

        $checkTotal = ComponentSejarah::all()->count();
        if($checkTotal < 3){
            $sejarahLimit = ComponentSejarah::all();
        }else{
            $sejarahLimit = ComponentSejarah::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        $judul = "Sejarah";
        return view('pages.detail.sejarah', compact('sejarah','judul', 'contentLimit'));
    }

    public function wisataDetail($slug){
        // dd
        $content = ComponentWisataHiburan::where('slug','=', $slug)->get()->first();
        // dd($slug);
        $checkTotal = ComponentWisataHiburan::all()->count();
        if($checkTotal < 3){
            $contentLimit = ComponentWisataHiburan::all();
        }else{
            $contentLimit = ComponentWisataHiburan::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        // dd($sejarahLimit);
        $judul = "Wisata Hiburan";
        return view('pages.detail.wisata', compact('content','judul', 'contentLimit'));
    }

    public function desaDetail($slug){
        // dd
        $content = ComponentDesa::where('slug','=', $slug)->get()->first();
        // dd($slug);
        $checkTotal = ComponentDesa::all()->count();
        if($checkTotal < 3){
            $contentLimit = ComponentDesa::all();
        }else{
            $contentLimit = ComponentDesa::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        // dd($sejarahLimit);
        $judul = "Desa";
        return view('pages.detail.desa', compact('content','judul', 'contentLimit'));
    }

    public function puraDetail($slug){
        // dd
        $content = ComponentPura::where('slug','=', $slug)->get()->first();
        // dd($slug);
        $checkTotal = ComponentPura::all()->count();
        if($checkTotal < 3){
            $contentLimit = ComponentPura::all();
        }else{
            $contentLimit = ComponentPura::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        // dd($sejarahLimit);
        $judul = "Pura";
        return view('pages.detail.pura', compact('content','judul', 'contentLimit'));
    }

    public function makananDetail($slug){
        // dd
        $content = ComponentFood::where('slug','=', $slug)->get()->first();
        // dd($slug);
        $contentLimit = ComponentFood::orderBy('created_at', 'DESC')->limit(3)->get();
        $checkTotal = ComponentFood::all()->count();
        if($checkTotal < 3){
            $contentLimit = ComponentFood::all();
        }else{
            $contentLimit = ComponentFood::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        // dd($sejarahLimit);
        $judul = "Pura";
        return view('pages.detail.makanan', compact('content','judul', 'contentLimit'));
    }

    public function pantaiDetail($slug){
        // dd
        $content = ComponentPantai::where('slug','=', $slug)->get()->first();
        // dd($slug);
        
        $checkTotal = ComponentPantai::all()->count();
        if($checkTotal < 3){
            $contentLimit = ComponentPantai::all();
        }else{
            $contentLimit = ComponentPantai::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        // dd($sejarahLimit);
        $judul = "Pura";
        return view('pages.detail.pantai', compact('content','judul', 'contentLimit'));
    }

    public function pembangunanDetail($slug){
        // dd
        $content = ComponentPembangunan::where('slug','=', $slug)->get()->first();
        // dd($slug);
        $checkTotal = ComponentPembangunan::all()->count();
        if($checkTotal < 3){
            $contentLimit = ComponentPembangunan::all();
        }else{
            $contentLimit = ComponentPembangunan::orderBy('created_at', 'DESC')->limit(3)->get();
        }

        // dd($sejarahLimit);
        $judul = "Pembangunan";
        return view('pages.detail.pembangunan', compact('content','judul', 'contentLimit'));
    }
}
