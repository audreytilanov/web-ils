<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentPura;

class Pura extends Component
{
    public function render()
    {
        $puras = ComponentPura::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.pura', compact('puras'));
    }
}
