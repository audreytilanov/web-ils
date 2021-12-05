<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableContent extends Model
{
    use HasFactory;
    protected $table='table_contents';
    protected $primarykey='id';
    protected $fillable=['nama_component', 'status_aktif'];
}
