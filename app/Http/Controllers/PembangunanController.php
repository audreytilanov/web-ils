<?php

namespace App\Http\Controllers;

use App\Models\TableContent;
use Illuminate\Http\Request;
use App\Models\ComponentPembangunan;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PembangunanController extends Controller
{
    public function index()
    {
        $contents = ComponentPembangunan::all();
        return view('backend.pembangunan.list-content-pembangunan', compact('contents'));
    }

    public function add_content()
    {
        return view('backend.pembangunan.add-pembangunan');
    }

    public function save_addcontent(Request $request)
    {
        $tanggal = Carbon::now();
        // gambar 1
        $fileName1 = $request->image1->getClientOriginalName();
        $file1 = $request->file('image1');
        Storage::disk('asset')->put('asset/pembangunan/'.$fileName1, file_get_contents($file1));
        // gambar 2
        $fileName2 = $request->image2->getClientOriginalName();
        $file2 = $request->file('image2');
        // dd($file2);
        Storage::disk('asset')->put('asset/pembangunan/'.$fileName2, file_get_contents($file2));
        ComponentPembangunan::create([
            'title' => $request->title,
            'desc_left' => $request->desc_left,
            'desc_right' => $request->desc_right,
            'tanggal' => $tanggal->format('l \\, jS F Y'),
            'sumber'=>$request->sumber,
            'image1'=>$request->image1->getClientOriginalName(),
            'image2'=>$request->image2->getClientOriginalName()
        ]);
        return redirect()->route('list_pembangunan')->with('success', 'Berhasil Menambahkan Konten Pembangunan');
    }

    public function edit_content($id)
    {
        $content = ComponentPembangunan::where('id','=',$id)->get()->first();
        // dd($contents);
        return view('backend.pembangunan.edit-content-pembangunan', compact('content'));
    }

    public function save_editcontent($id, Request $request)
    {
        $temp= ComponentPembangunan::where('id','=',$id)->get()->first();
        
        // dd($request->file('image2'));
        if($request->file('image1') && $request->file('image2')){
            Storage::disk('asset')->delete('asset/pembangunan/'.$temp->image1);
            $fileName = $request->image1->getClientOriginalName();
            $file = $request->file('image1');
            Storage::disk('asset')->put('asset/pembangunan/'.$fileName, file_get_contents($file));

            Storage::disk('asset')->delete('asset/pembangunan/'.$temp->image2);
            $fileName2 = $request->image2->getClientOriginalName();
            $file2 = $request->file('image2');
            Storage::disk('asset')->put('asset/pembangunan/'.$fileName2, file_get_contents($file2));

            $temp->update([
                'title' => $request->title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'sumber'=>$request->sumber,
                'image1'=>$request->image1->getClientOriginalName(),
                'image2'=>$request->image2->getClientOriginalName(),
                'status_aktif' => $request->status_aktif
            ]);
        }elseif($request->file('image1')){
            Storage::disk('asset')->delete('asset/pembangunan/'.$temp->image1);
            $fileName = $request->image1->getClientOriginalName();
            $file = $request->file('image1');
            Storage::disk('asset')->put('asset/pembangunan/'.$fileName, file_get_contents($file));

            $temp->update([
                'title' => $request->title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'sumber'=>$request->sumber,
                'image1'=>$request->image1->getClientOriginalName(),
                'status_aktif' => $request->status_aktif
            ]);
        }elseif($request->file('image2')){
            Storage::disk('asset')->delete('asset/pembangunan/'.$temp->image2);
            $fileName = $request->image2->getClientOriginalName();
            $file = $request->file('image2');
            Storage::disk('asset')->put('asset/pembangunan/'.$fileName, file_get_contents($file));

            $temp->update([
                'title' => $request->title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'sumber'=>$request->sumber,
                'image2'=>$request->image2->getClientOriginalName(),
                'status_aktif' => $request->status_aktif
            ]);
        }else{
            $temp->update([
                'title' => $request->title,
                'desc_left' => $request->desc_left,
                'desc_right' => $request->desc_right,
                'sumber'=>$request->sumber,
                'status_aktif' => $request->status_aktif
            ]);
        }
        
        return redirect()->route('list_pembangunan')->with('success', 'Berhasil Mengubah Konten Pembangunan');
    }

    public function deleteContent($id){
        $data = ComponentPembangunan::find($id);
        
        Storage::disk('asset')->delete('asset/pembangunan/'.$data->image1);
        Storage::disk('asset')->delete('asset/pembangunan/'.$data->image2);

        // // dd($data);
        $data->delete();
        return redirect()->route('list_pembangunan')->with('success', 'Berhasil Menghapus Konten Pembangunan');
    }
}
