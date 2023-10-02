<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reminder extends Model
{

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
    
}
