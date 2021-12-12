<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentPura;
use Illuminate\Support\Facades\Storage;

class PuraController extends Controller
{
    public function index(){
        $contents = ComponentPura::all();

        return view('backend.pura.index',compact('contents'));
    }

    public function add(){
        return view('backend.pura.add');
    }

    public function addSave(Request $request){
        // gambar 1
        $fileName1 = $request->image1->getClientOriginalName();
        $file1 = $request->file('image1');
        Storage::disk('asset')->put('asset/pura/'.$fileName1, file_get_contents($file1));
        // gambar 2
        $fileName2 = $request->image2->getClientOriginalName();
        $file2 = $request->file('image2');
        // dd($request->file('image1'));
        Storage::disk('asset')->put('asset/pura/'.$fileName2, file_get_contents($file2));
        ComponentPura::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'desc_left' => $request->desc_left,
            'desc_right' => $request->desc_right,
            'image1'=>$request->image1->getClientOriginalName(),
            'image2'=>$request->image2->getClientOriginalName()
        ]);
        return redirect()->route('pura.index')->with('success', 'Berhasil Menambahkan Konten Pura');
    }

    public function edit($id){
        $content = ComponentPura::where('id','=',$id)->get()->first();
        // dd($contents);
        return view('backend.pura.edit', compact('content'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentPura::where('id','=',$id)->get()->first();
        
        // dd($request->file('image2'));
        if($request->file('image1') && $request->file('image2')){
            Storage::disk('asset')->delete('asset/pura/'.$temp->image1);
            $fileName = $request->image1->getClientOriginalName();
            $file = $request->file('image1');
            Storage::disk('asset')->put('asset/pura/'.$fileName, file_get_contents($file));

            Storage::disk('asset')->delete('asset/pura/'.$temp->image2);
            $fileName2 = $request->image2->getClientOriginalName();
            $file2 = $request->file('image2');
            Storage::disk('asset')->put('asset/pura/'.$fileName2, file_get_contents($file2));

            $temp->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'image1'=>$request->image1->getClientOriginalName(),
                'image2'=>$request->image2->getClientOriginalName(),
                'status_aktif' => $request->status_aktif
            ]);
        }elseif($request->file('image1')){
            Storage::disk('asset')->delete('asset/pura/'.$temp->image1);
            $fileName = $request->image1->getClientOriginalName();
            $file = $request->file('image1');
            Storage::disk('asset')->put('asset/pura/'.$fileName, file_get_contents($file));

            $temp->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'image1'=>$request->image1->getClientOriginalName(),
                'status_aktif'=> $request->status_aktif
            ]);
        }elseif($request->file('image2')){
            Storage::disk('asset')->delete('asset/pura/'.$temp->image2);
            $fileName = $request->image2->getClientOriginalName();
            $file = $request->file('image2');
            Storage::disk('asset')->put('asset/pura/'.$fileName, file_get_contents($file));

            $temp->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'image2'=>$request->image2->getClientOriginalName(),
                'status_aktif'=> $request->status_aktif
            ]);
        }else{
            $temp->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('pura.index')->with('success', 'Berhasil Mengubah Konten Pura');
    }

    public function delete($id){
        $data = ComponentPura::find($id);
        
        Storage::disk('asset')->delete('asset/pura/'.$data->image1);
        Storage::disk('asset')->delete('asset/pura/'.$data->image2);

        // // dd($data);
        $data->delete();
        return redirect()->route('pura.index')->with('success', 'Berhasil Menghapus Konten Pura');
    }
}
