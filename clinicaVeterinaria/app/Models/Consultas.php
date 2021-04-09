<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    use HasFactory;

    public function clientes()
    {
        return $this->hasOneThrough(
            Clientes::class,
            Animais::class,
            'id',
            'id',
            'animais_id',
            'clientes_id');
    }

    public function animais()
    {
        return $this->belongsTo(Animais::class, "animais_id");
    }

}
