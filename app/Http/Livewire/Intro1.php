<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentIntro1;

class Intro1 extends Component
{
    public function render()
    {
        $intro1 = ComponentIntro1::first();
        return view('livewire.intro1', compact('intro1'));
    }
}
