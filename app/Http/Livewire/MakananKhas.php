<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentFood;

class MakananKhas extends Component
{
    public function render()
    {
        $foods_header = ComponentFood::where('status_aktif','=',1)->where('status', '=', 'header')->orderBy('id', 'desc')->limit(1)->get();
        $foods = ComponentFood::where('status_aktif','=',1)->where('status', '=', 'sub')->orderBy('id', 'desc')->limit(6)->get();
        return view('livewire.makanan-khas')->with(compact('foods', 'foods_header'));
    }
}
