<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentario',
        'idea_id',
    ];

    public function idea(){
        return $this->belognsTo(Idea::class, 'idea_id');
    }

}
