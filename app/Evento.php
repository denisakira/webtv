<?php

namespace webTV;

use Illuminate\Database\Eloquent\Model;

use webTV\Equipamento;

use webTV\User;

class Evento extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function equipamento()
    {
        # code...
        return $this->hasMany(Equipamento::class);
    }

    // public function equipamentoId() {
    //     return $this->hasMany(Equipamento::class, "equipamento_id");
    // }
}