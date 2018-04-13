<?php

namespace webTV;

use Illuminate\Database\Eloquent\Model;

use webTV\Equipamento;

class Evento extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class);
    }
}