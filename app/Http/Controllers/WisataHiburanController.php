<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentWisataHiburan;
use Illuminate\Support\Facades\Storage;

class WisataHiburanController extends Controller
{
    public function index(){
        $contents = ComponentWisataHiburan::all();

        return view('backend.wisata.index', compact('contents'));
    }

    public function add(){
        return view('backend.wisata.add');

    }

    public function addSave(Request $request){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        // dd($request->file('image'));
        Storage::disk('asset')->put('/asset/wisata-hiburan/'.$fileName, file_get_contents($file));
        ComponentWisataHiburan::create([
            'slug'=>$request->slug,
            'title'=>$request->title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right,
            'image'=>$request->image->getClientOriginalName(),
        ]);
        return redirect()->route('wisata.index')->with('success', 'Berhasil Menambahkan Konten Wisata Hiburan');
    }

    public function edit($id){
        $content = ComponentWisataHiburan::where('id','=',$id)->get()->first();
        // dd($content);
        return view('backend.wisata.edit', compact('content'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentWisataHiburan::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/wisata-hiburan/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/wisata-hiburan/'.$fileName, file_get_contents($file));

            $temp->update([
                'slug'=>$request->slug,
                'desc_left'=>$request->desc_left,
                'desc_right'=>$request->desc_right,
                'image'=>$request->image->getClientOriginalName(),
                'status_aktif' => $request->status_aktif

            ]);
        }else{
            $temp->update([
                'slug'=>$request->slug,
                'title'=>$request->title,
                'desc_left'=>$request->desc_left,
                'desc_right'=>$request->desc_right,
                'status_aktif' => $request->status_aktif

            ]);
        }
        
        return redirect()->route('wisata.index')->with('success', 'Berhasil Mengubah Konten Wisata Hiburan');;
    }

    public function delete($id){
        $data = ComponentWisataHiburan::find($id);
        
        Storage::disk('asset')->delete('asset/wisata-hiburan/'.$data->image);

        // dd($data);
        $data->delete();
        return redirect()->route('wisata.index')->with('success', 'Berhasil Menghapus Konten Wisata Hiburan');
    }

}
