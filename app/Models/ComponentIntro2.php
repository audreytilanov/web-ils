<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentIntro2 extends Model
{
    use HasFactory;
    protected $table='component_intro2s';
    protected $primarykey='id';
    protected $fillable=['title', 'desc', 'image', 'status'];
}
