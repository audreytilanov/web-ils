<?php

namespace App\Http\Controllers;

use App\Models\ChildComponentPantai;
use Illuminate\Http\Request;
use App\Models\ComponentPantai;

class PantaiController extends Controller
{
    public function index(){
        $contents = ComponentPantai::all();

        return view('backend.pantai.index', compact('contents'));
    }

    public function add(){
        
    }

    public function addSave(){
        
    }

    public function edit(){
        
    }

    public function editSave(){
        
    }

    public function delete(){
        
    }
}
