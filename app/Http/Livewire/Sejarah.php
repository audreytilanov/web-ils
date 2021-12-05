<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentSejarah;

class Sejarah extends Component
{
    public function render()
    {
        $sejarahs = ComponentSejarah::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.sejarah', compact('sejarahs'));
    }
}
