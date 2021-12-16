<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentPembangunan extends Model
{
    use HasFactory;

    protected $fillable=['title', 'desc_left', 'desc_right', 'tanggal', 'sumber', 'image1', 'image2', 'status_aktif'];

}
