<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentPantai;
use App\Models\ChildComponentPantai;

class Pantai extends Component
{
    public function render()
    {
        $pantais = ComponentPantai::where('status_aktif', '=',1)->get();
        $childpantais = ChildComponentPantai::all();
        return view('livewire.pantai')->with(compact('pantais', 'childpantais'));
    }
}
