<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Program extends Model
{

    public function school()
    {
        return $this->belongsTo(School::class)->orderBy('sponsored', 'desc');
        ;
    }

    public function programCategory(){
        return $this->belongsTo(ProgramCategory::class);
    }

    public function extrapays(){
        return $this->belongsToMany(ExtraPay::class);
    }

    public function extraservices(){
        return $this->belongsToMany(ExtraService::class);
    }

    public function tostays(){
        return $this->belongsToMany(Tostay::class);
    }

    
}
