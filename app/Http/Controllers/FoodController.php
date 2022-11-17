<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentFood;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index(){
        $contents = ComponentFood::all();

        return view('backend.food.index', compact('contents'));
    }

    public function add(){
        return view('backend.food.add');
    }

    public function addSave(Request $request){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        Storage::disk('asset')->put('asset/food/'.$fileName, file_get_contents($file));
        ComponentFood::create([
            'slug'=>$request->slug,
            'title'=>$request->title,
            'desc'=>$request->desc,
            'image'=>$request->image->getClientOriginalName(),
            'status'=> $request->lama,
        ]);
        return redirect()->route('food.index')->with('success', 'Berhasil Menambahkan Konten Paket');
    }

    public function edit($id){
        $contents = ComponentFood::where('id','=',$id)->get();
        $count = ComponentFood::where('status', '=', 'header')->count();

        return view('backend.food.edit', compact('contents','count'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentFood::where('id','=',$id)->get()->first();
        
        // dd($request->file('image'));
        if($request->file('image')){
            Storage::disk('asset')->delete('asset/food/'.$temp->image);
            $fileName = $request->image->getClientOriginalName();
            $file = $request->file('image');
            Storage::disk('asset')->put('asset/food/'.$fileName, file_get_contents($file));

            $temp->update([
                'slug'=>$request->slug,
                'title'=>$request->title,
                'desc'=>$request->desc,
                'image'=>$request->image->getClientOriginalName(),
                'status'=> $request->status,
                'status_aktif' => $request->status_aktif
            ]);
        }else{
            $temp->update([
                'slug'=>$request->slug,
                'title'=>$request->title,
                'desc'=>$request->desc,
                'status'=> $request->status,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('food.index')->with('success', 'Berhasil Mengubah Konten Food');
    }

    public function delete($id){
        $data = ComponentFood::find($id);
        
        Storage::disk('asset')->delete('asset/food/'.$data->image);

        // // dd($data);
        $data->delete();
        return redirect()->route('food.index')->with('success', 'Berhasil Menghapus Konten Video');
    }
}
