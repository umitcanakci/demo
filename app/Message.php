<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function receive()
    {
        return $this->belongsTo(User::class, 'receive_id', 'id');
    }
    
}
