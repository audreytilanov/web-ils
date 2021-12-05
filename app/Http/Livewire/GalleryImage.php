<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ComponentGalleryImage;

class GalleryImage extends Component
{
    public function render()
    {
        $galleryImages = ComponentGalleryImage::all();
        return view('livewire.gallery-image', compact('galleryImages'));
    }
}
