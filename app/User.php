<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Compliment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function compliments()
    {
        return $this->hasMany(Compliment::class);
    }*/

    public function complimentsGiven()
    {
        return $this->hasMany(Compliment::class, 'giver', 'id');
    }

    public function complimentsReceived()
    {
        return $this->hasMany(Compliment::class, 'receiver', 'id');
    }
}
