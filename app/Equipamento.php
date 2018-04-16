<?php

namespace webTV;

use Illuminate\Database\Eloquent\Model;

use webTV\Evento;

class Equipamento extends Model
{
    //
    public function evento() {
        return $this->belongsTo(Evento::class);
    }

    // public function eventoId() {
    //     return $this->belongsTo(Evento::class, "evento_id");
    // }
}
