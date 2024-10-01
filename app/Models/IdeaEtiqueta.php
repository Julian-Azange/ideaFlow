<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeaEtiqueta extends Model
{
    use HasFactory;

    protected $fillable = [
        'idea_id',
        'etiqueta_id',
    ];

    public function etiqueta(){
        return $this->belongsTo(Etiqueta::class, 'etiqueta_id');
    }

    public function idea(){
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
