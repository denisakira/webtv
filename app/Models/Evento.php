<?php

namespace webTV\Models;

use Illuminate\Database\Eloquent\Model;

use webTV\Models\Equipamento;

use webTV\User;

class Evento extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function equipamento()
    {
        return $this->hasMany(Equipamento::class);
    }
}