<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Stage extends Model
{

    public function application(){
        return $this->belongsTo(Application::class);
    }
    
}
