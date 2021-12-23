<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentDesa extends Model
{
    use HasFactory;

    protected $fillable=['title','slug', 'sub_title', 'desc_left', 'desc_right', 'image', 'status_aktif'];
}
