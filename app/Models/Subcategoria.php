<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Publicacion;

class Subcategoria extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'activo',
        'imagen',
        'create_time',
        'categoria_id',
    ];

    public function categoria() {
         return $this->belongsTo(Categoria::class);
    }

    public function publicaciones() {
        return $this->hasMany(Publicacion::class);
    }     
}
