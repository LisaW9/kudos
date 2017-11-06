<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compliment extends Model
{
    public function getGiver()
    {
        return $this->belongsTo(User::class, 'giver');
    }

    public function getReceiver()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
