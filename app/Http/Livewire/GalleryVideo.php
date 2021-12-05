<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentGalleryVideo;

class GalleryVideo extends Component
{
    public function render()
    {
        $galleryVideos = ComponentGalleryVideo::all();
        return view('livewire.gallery-video', compact('galleryVideos'));
    }
}
