<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'prioridad',
        'estado',
        'categoria_id',
    ];

    public function actualizaciones(){
        return $this->hasMany(Actualizacion::class);
    }

    public function categorias(){
        return $this->hasMany(Categoria::class);
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class, 'ideas_etiquetas')
        ->withTimestamps();
    }
}
