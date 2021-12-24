<?php

namespace App\Http\Livewire;

use App\Models\Reviews;
use Livewire\Component;

class Review extends Component
{
    public function render()
    {
        $contents = Reviews::all();
        return view('livewire.review',compact('contents'));
    }
}
