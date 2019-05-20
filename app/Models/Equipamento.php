<?php

namespace webTV\Models;

use Illuminate\Database\Eloquent\Model;

use webTV\Models\Evento;

class Equipamento extends Model
{
    //
    public function evento() {
        return $this->belongsTo(Evento::class);
    }
}
