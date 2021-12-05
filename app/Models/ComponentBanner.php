<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentBanner extends Model
{
    use HasFactory;
    protected $table='component_banners';
    protected $primarykey='id';
    protected $fillable=['title', 'sub-title', 'video-banner'];
}
