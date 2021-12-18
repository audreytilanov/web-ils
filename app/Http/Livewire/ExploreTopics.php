<?php

namespace App\Http\Livewire;

use App\Models\ComponentDesa;
use App\Models\ComponentFood;
use App\Models\ComponentPantai;
use App\Models\ComponentPura;
use App\Models\ComponentSejarah;
use App\Models\ComponentWisataHiburan;
use Livewire\Component;

class ExploreTopics extends Component
{
    public function render()
    {
        $sejarah = ComponentSejarah::all()->count();
        $wisata = ComponentWisataHiburan::all()->count();
        $pantai = ComponentPantai::all()->count();
        $desa = ComponentDesa::all()->count();
        $pura = ComponentPura::all()->count();
        $makanan = ComponentFood::all()->count();
        // dd($sejarah);
        return view('livewire.explore-topics', compact(
            'sejarah',
            'wisata',
            'pantai',
            'desa',
            'pura',
            'makanan'
        ));
    }
}
