<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategoria;

class Categoria extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'activo',
        'imagen',
        'create_time',
     ];

     public function subcategorias() {
         return $this->hasMany(Subcategoria::class);
         }

}
