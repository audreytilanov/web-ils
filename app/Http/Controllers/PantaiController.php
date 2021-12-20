<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponentPantai;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\ChildComponentPantai;

class PantaiController extends Controller
{
    public function index(){
        $contents = ComponentPantai::all();

        return view('backend.pantai.index', compact('contents'));
    }

    public function add(){
        return view('backend.pantai.add');
        
    }

    public function addSave(Request $request){
        // dd($id);
        $statement = DB::select("SHOW TABLE STATUS LIKE 'component_pantais'");
        $nextId = $statement[0]->Auto_increment;
        // dd();
        $new = ComponentPantai::create([
            'slug'=>$request->slug,
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right,
            'filter'=>"pantai-".$nextId-1,
            'status_tingkatan'=> "sub"
        ]);
        // dd($new);

        return redirect()->route('pantai.index')->with('success', 'Berhasil Menambahkan Konten Pantai');
    }

    public function edit($id){
        $content = ComponentPantai::find($id);
        $count = ComponentPantai::where('status_tingkatan', '=', 'header')->count();

        return view('backend.pantai.edit',compact('content','count'));
    }

    public function editSave(Request $request, $id){
        $temp= ComponentPantai::where('id','=',$id)->get()->first();

        $temp->update([
            'slug'=>$request->slug,
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'desc_left'=>$request->desc_left,
            'desc_right'=>$request->desc_right,
            'status_tingkatan'=> $request->status,
            'status_aktif'=> $request->status_aktif,
        ]);
        return redirect()->route('pantai.index')->with('success', 'Berhasil Mengubah Konten Pantai');
        
    }

    public function delete($id){
        $data = ComponentPantai::find($id);

        // // dd($data);
        $data->delete();
        return redirect()->route('pantai.index')->with('success', 'Berhasil Menghapus Konten Pantai');
    }

    // ################ CHILD ######################

    public function childIndex($id){
        $contents = ChildComponentPantai::where('parent_id','=',$id)->get();
        $content = ChildComponentPantai::where('parent_id','=',$id)->get()->first();
        $parent_id = $id;
        // dd($content);
        return view('backend.pantai.child.index',compact('contents', 'content','parent_id'));

    }

    public function childAdd(Request $request, $id){
        $fileName = $request->image->getClientOriginalName();
        $file = $request->file('image');
        Storage::disk('asset')->put('asset/pantai/'.$fileName, file_get_contents($file));
        ChildComponentPantai::create([
            'parent_id'=>$id,
            'image'=>$request->image->getClientOriginalName(),
        ]);
        return redirect()->route('pantai.child.index',$id)->with('success', 'Berhasil Menambahkan Image Pantai');
    }

    public function childDelete($id, $parent_id){
        $data = ChildComponentPantai::find($id);

        // // dd($data);
        $data->delete();
        return redirect()->route('pantai.child.index',$parent_id)->with('success', 'Berhasil Menghapus Image Pantai');
    }
}
