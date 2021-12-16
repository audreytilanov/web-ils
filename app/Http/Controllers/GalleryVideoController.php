<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentGalleryVideo;
use Illuminate\Support\Facades\Storage;

class GalleryVideoController extends Controller
{
    public function index(){
        $contents = ComponentGalleryVideo::all();

        return view('backend.video.index', compact('contents'));
    }

    public function add(){
        return view('backend.video.add');
        
    }

    public function addSave(Request $request){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        Storage::disk('asset')->put('asset/galery-video/'.$fileName, file_get_contents($file));
        ComponentGalleryVideo::create([
            'title'=>$request->title,
            'image'=>$request->image->getClientOriginalName(),
            'link_yt'=>$request->link_yt,
            'status'=> "sub",
        ]);
        return redirect()->route('video.index')->with('success', 'Berhasil Menambahkan Konten Gallery Video');
    }

    public function edit($id){
        $contents = ComponentGalleryVideo::where('id','=',$id)->get();
        $count = ComponentGalleryVideo::where('status', '=', 'header')->count();

        return view('backend.video.edit', compact('contents','count'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentGalleryVideo::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/gallery-video/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/gallery-video/'.$fileName, file_get_contents($file));

            $temp->update([
                'title'=>$request->title,
                'image'=>$request->image->getClientOriginalName(),
                'link_yt'=>$request->link_yt,
                'status'=> $request->status,
                'status_aktif' => $request->status_aktif
            ]);
        }else{
            $temp->update([
                'title'=>$request->title,
                'link_yt'=>$request->link_yt,
                'status'=> $request->status,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('video.index')->with('success', 'Berhasil Mengubah Konten Video');
    }

    public function delete($id){
        $data = ComponentGalleryVideo::find($id);
        
        Storage::disk('asset')->delete('asset/gallery-video/'.$data->image);

        // // dd($data);
        $data->delete();
        return redirect()->route('video.index')->with('success', 'Berhasil Menghapus Konten Video');
    }
}
