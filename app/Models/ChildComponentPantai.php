<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildComponentPantai extends Model
{
    use HasFactory;
    protected $table='child_component_pantais';
    protected $fillable=['image', 'parent_id'];

    public function component_pantais()
    {
        return $this->belongsTo(ComponentPantai::class);
    }
}
