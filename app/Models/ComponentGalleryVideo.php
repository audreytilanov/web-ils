<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentGalleryVideo extends Model
{
    use HasFactory;
    protected $table='component_gallery_videos';
    protected $primarykey='id';
    protected $fillable=['title', 'image', 'link_yt', 'status', 'status_aktif'];
}
