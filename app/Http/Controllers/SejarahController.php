<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentSejarah;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    public function index(){
        $contents = ComponentSejarah::all();

        return view('backend.sejarah.index',compact('contents'));
    }

    public function add(){
        return view('backend.sejarah.add');
    }

    public function addSave(Request $request){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        // dd($request->file('image'));
        Storage::disk('asset')->put('asset/sejarah/'.$fileName, file_get_contents($file));
        ComponentSejarah::create([
            'slug'=>$request->slug,
            'header'=>$request->header,
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right,
            'image'=>$request->image->getClientOriginalName(),
        ]);
        return redirect()->route('sejarah.index')->with('success', 'Berhasil Menambahkan Konten Sejarah');
    }

    public function edit($id){
        $content = ComponentSejarah::where('id','=',$id)->get()->first();
        // dd($content);
        return view('backend.sejarah.edit', compact('content'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentSejarah::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/sejarah/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/sejarah/'.$fileName, file_get_contents($file));

            $temp->update([
                'slug'=>$request->slug,
                'header'=>$request->header,
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'desc_left'=>$request->desc_left,
                'desc_right'=>$request->desc_right,
                'image'=>$request->image->getClientOriginalName(),
                'status_aktif' => $request->status_aktif

            ]);
        }else{
            $temp->update([
                'slug'=>$request->slug,
                'header'=>$request->header,
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'desc_left'=>$request->desc_left,
                'desc_right'=>$request->desc_right,
                'status_aktif' => $request->status_aktif

            ]);
        }
        
        return redirect()->route('sejarah.index')->with('success', 'Berhasil Mengubah Konten Sejarah');;
    }

    public function delete($id){
        $data = ComponentSejarah::find($id);
        
        Storage::disk('asset')->delete('asset/sejarah/'.$data->image);

        // dd($data);
        $data->delete();
        return redirect()->route('sejarah.index')->with('success', 'Berhasil Menghapus Konten Sejarah');
    }
}
