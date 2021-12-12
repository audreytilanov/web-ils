<?php

namespace App\Http\Controllers;

use App\Models\ComponentIntro1;
use Illuminate\Http\File;
use App\Models\TableContent;
use Illuminate\Http\Request;
use App\Models\ComponentIntro2;
use Illuminate\Support\Facades\Storage;

class Intro2Controller extends Controller
{
    public function index()
    {
        $contents = ComponentIntro2::all();
        return view('backend.intro2.index', compact('contents'));
    }
    
    public function add_content()
    {
        return view('backend.intro2.add');
    }

    public function save_addcontent(Request $request)
    {
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        Storage::disk('asset')->put('asset/intro2/'.$fileName, file_get_contents($file));
        ComponentIntro2::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'image'=>$request->image->getClientOriginalName(),
            'status'=> "sub",
        ]);
        return redirect()->route('list_intro2')->with('success', 'Berhasil Menambahkan Konten Intro 2');;
    }

    public function edit_content($id)
    {
        $contents = ComponentIntro2::where('id','=',$id)->get();
        $count = ComponentIntro2::where('status', '=', 'primary')->count();

        return view('backend.intro2.edit', compact('contents','count'));
    }

    public function save_editcontent($id, Request $request)
    {
        $temp= ComponentIntro2::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/intro2/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/intro2/'.$fileName, file_get_contents($file));

            $temp->update([
                'title'=>$request->title,
                'desc'=>$request->desc,
                'image'=>$request->image->getClientOriginalName(),
                'status'=> $request->status,
                'status_aktif' => $request->status_aktif
            ]);
        }else{
            $temp->update([
                'title'=>$request->title,
                'desc'=>$request->desc,
                'status'=> $request->status,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('list_intro2')->with('success', 'Berhasil Mengubah Konten Intro 2');;
    }

    public function delete_content($id){
        $data = ComponentIntro2::find($id);
        
        Storage::disk('asset')->delete('asset/intro2/'.$data->image);

        // // dd($data);
        $data->delete();
        return redirect()->route('list_intro2')->with('success', 'Berhasil Menghapus Konten Intro 2');
    }
}
