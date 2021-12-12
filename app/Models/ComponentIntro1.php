<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentIntro1 extends Model
{
    use HasFactory;
    protected $table='component_intro1s';
    protected $primarykey='id';
    protected $fillable=['title', 'desc_left', 'desc_right', 'status_aktif'];
}
