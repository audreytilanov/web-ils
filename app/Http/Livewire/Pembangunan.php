<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentPembangunan;

class Pembangunan extends Component
{
    public function render()
    {
        $pembangunans = ComponentPembangunan::where('status_aktif', '=',1)->orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.pembangunan', compact('pembangunans'));
    }
}
