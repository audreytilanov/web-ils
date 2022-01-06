<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index(){
        $contents = Reviews::all();

        return view('backend.review.index', compact('contents'));
    }

    public function add(){
        return view('backend.review.add');
    }

    public function addSave(Request $request){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        Storage::disk('asset')->put('asset/review/'.$fileName, file_get_contents($file));
        Reviews::create([
            'quote'=>$request->quote,
            'nama_orang'=>$request->nama_orang,
            'foto'=>$request->image->getClientOriginalName()
        ]);
        return redirect()->route('review.index')->with('success', 'Berhasil Menambahkan Konten Review');
    }

    public function edit($id){
        $contents = Reviews::where('id','=',$id)->get();

        return view('backend.review.edit', compact('contents'));
    }

    public function editSave(Request $request, $id){
        $temp= Reviews::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/review/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/review/'.$fileName, file_get_contents($file));

            $temp->update([
                'quote'=>$request->quote,
                'nama_orang'=>$request->nama_orang,
                'foto'=>$request->image->getClientOriginalName(),
                'status_aktif' => $request->status_aktif
            ]);
        }else{
            $temp->update([
                'quote'=>$request->quote,
                'nama_orang'=>$request->nama_orang,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('review.index')->with('success', 'Berhasil Mengubah Konten Review');
    }

    public function delete($id){
        $data = Reviews::find($id);
        
        Storage::disk('asset')->delete('asset/review/'.$data->image);

        // // dd($data);
        $data->delete();
        return redirect()->route('review.index')->with('success', 'Berhasil Menghapus Konten Review');
    }
}
