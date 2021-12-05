<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentIntro2;

class Intro2 extends Component
{
    public function render()
    {
        $intro2s= ComponentIntro2::all();
        return view('livewire.intro2', compact('intro2s'));
    }
}
