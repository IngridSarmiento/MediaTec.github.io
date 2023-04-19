<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategoria;
use App\Models\Multimedia;

class Publicacion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "publicaciones";

    protected $fillable = [
        'titulo',
        'fecha',
        'descripcion',
        'destacado',
        'create_time',
        'subcategoria_id',        
    ];

    public function subcategoria() {
         return $this->belongsTo(Subcategoria::class);
    }

    public function multimedias() {
        return $this->hasMany(Multimedia::class);
    }

    

}
