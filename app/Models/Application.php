<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Program;
use App\ExtraPay;
use App\ExtraService;
use App\Tostay;
use App\File;
use App\UserInformation;
use App\Models\User;

class Application extends Model
{
    use HasFactory;

    protected $with = ['consultant'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
    
    public function UserInformation()
    {
        return $this->hasOne(UserInformation::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
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

    public function consultants()
    {
        return $this->hasOne(User::class, 'consultant_id');
    }

}
