<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentPantai extends Model
{
    use HasFactory;
    protected $table='component_pantais';
    protected $primarykey='id';
    protected $fillable=['title', 'sub_title', 'desc_left', 'desc_right', 'filter', 'status_tingkatan'];

    public function child_component_pantais()
    {
        return $this->hasMany(ChildComponentPantai::class, 'parent_id', 'id');
    }
}
