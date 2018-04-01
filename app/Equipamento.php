<?php

namespace WebTV;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    //
    public function Evento() {
        $this->belongsTo(Evento::class);
    }
}
