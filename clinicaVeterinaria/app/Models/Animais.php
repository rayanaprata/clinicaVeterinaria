<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animais extends Model
{
    use HasFactory;

    public function clientes()
    {
        return $this->belongsTo(Clientes::class, "clientes_id");
    }

}
