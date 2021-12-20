<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentDesa;
use Illuminate\Support\Facades\Storage;

class DesaController extends Controller
{
    public function index(){
        $contents = ComponentDesa::all();

        return view('backend.desa.index', compact('contents'));
    }

    public function add(){
        return view('backend.desa.add');
    }

    public function addSave(Request $request){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        // dd($request->file('image'));
        Storage::disk('asset')->put('asset/desa/'.$fileName, file_get_contents($file));
        ComponentDesa::create([
            'slug'=>$request->slug,
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right,
            'image'=>$request->image->getClientOriginalName(),
        ]);
        return redirect()->route('desa.index')->with('success', 'Berhasil Menambahkan Konten Desa');
    }

    public function edit($id){
        $content = ComponentDesa::where('id','=',$id)->get()->first();
        // dd($content);
        return view('backend.desa.edit', compact('content'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentDesa::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/desa/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/desa/'.$fileName, file_get_contents($file));

            $temp->update([
                'slug'=>$request->slug,
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
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'desc_left'=>$request->desc_left,
                'desc_right'=>$request->desc_right,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('desa.index')->with('success', 'Berhasil Mengubah Konten Sejarah');;
    }

    public function delete($id){
        $data = ComponentDesa::find($id);
        
        Storage::disk('asset')->delete('asset/desa/'.$data->image);

        // dd($data);
        $data->delete();
        return redirect()->route('desa.index')->with('success', 'Berhasil Menghapus Konten Sejarah');
    }
}
