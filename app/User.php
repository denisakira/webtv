<?php

namespace webTV;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use webTV\Models\Evento;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relação com evento
     *
     * @return hasMany
     */
    public function evento() {
        return $this->hasMany(Evento::class);
    }

    /**
     * @param array|string $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role == $role;
    }

}
