<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publicacion;

class Multimedia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'ruta',
        'principal',
        'tipo',
        'create_time',
        'publicacion_id'
    ];

    public function publicacion() {
        return $this->belongsTo(Publicacion::class);
    }
}
