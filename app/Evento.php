<?php

namespace WebTV;

use Illuminate\Database\Eloquent\Model;

use WebTV\Equipamento;

class Evento extends Model
{
    //
    public function equipamentos(){
        $this->hasMany(Equipamento::class);
    }
}