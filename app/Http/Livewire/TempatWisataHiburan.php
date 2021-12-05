<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentWisataHiburan;

class TempatWisataHiburan extends Component
{
    public function render()
    {
        $wisatas = ComponentWisataHiburan::orderBy('id', 'desc')->limit(4)->get();
        $headlines = ComponentWisataHiburan::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.tempat-wisata-hiburan')->with(compact('wisatas', 'headlines'));
    }
}
