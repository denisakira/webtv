<?php

namespace WebTV;

use Illuminate\Database\Eloquent\Model;

use WebTV\Equipamento;

class Evento extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class);
    }
}