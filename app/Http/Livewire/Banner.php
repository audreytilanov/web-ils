<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\ComponentBanner;

class Banner extends Component
{
    public function render()
    {
        $banner = ComponentBanner::find(1);
        return view('livewire.banner', compact('banner'));
    }
}
