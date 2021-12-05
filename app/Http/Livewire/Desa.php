<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentDesa;

class Desa extends Component
{
    public function render()
    {
        $desas = ComponentDesa::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.desa', compact('desas'));
    }
}
