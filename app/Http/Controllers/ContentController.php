<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableContent;

class ContentController extends Controller
{
    public function index()
    {
        $contents = TableContent::all();
        return view('backend.home', compact('contents'));
    }

    public function add_content()
    {
        return view('backend.add-urutan-content');
    }

    public function save_addcontent(Request $request)
    {
        $temp= TableContent::create([
            'nama_component'=>$request->nama_component,
            'status_aktif'=>$request->status_aktif
        ]);
        return redirect()->route('home_admin');
    }

    public function edit_content($id)
    {
        $contents = TableContent::where('id','=',$id)->get();
        return view('backend.edit-urutan-content', compact('contents'));
    }

    public function save_editcontent($id, Request $request)
    {
        $temp= TableContent::find($id);
        $temp->update([
            'nama_component'=>$request->nama_component,
            'status_aktif'=>$request->status_aktif
        ]);
        return redirect()->route('home_admin');
    }

    public function delete_content($id)
    {
        $temp= TableContent::find($id);
        $temp->delete();
        return redirect()->route('home_admin')->with(['success' => 'List Component atas id ' . $temp->id .' dengan nama componentnya ' . $temp->nama_component . ' berhasil didelete!']);
    }

    
}
