<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class School extends Model
{

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function ProgramCategory(){
        return $this->belongsTo(ProgramCategory::class);
    }
    
}
