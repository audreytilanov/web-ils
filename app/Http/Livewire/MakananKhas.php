<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentFood;

class MakananKhas extends Component
{
    public function render()
    {
        $foods = ComponentFood::all();
        return view('livewire.makanan-khas', compact('foods'));
    }
}
