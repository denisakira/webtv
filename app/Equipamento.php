<?php

namespace WebTV;

use Illuminate\Database\Eloquent\Model;

use WebTV\Evento;

class Equipamento extends Model
{
    //
    public function evento() {
        return $this->belongsTo(Evento::class);
    }
}
