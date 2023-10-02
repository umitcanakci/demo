<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Program;
use App\ExtraPay;
use App\ExtraService;
use App\Tostay;
use App\File;
use App\Payment;
use App\Stage;
use App\Models\User;
use App\UserInformation;

class Application extends Model
{
    use HasFactory;

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

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function stages(){
        return $this->hasMany(Stage::class);
    }

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id', 'id');
    }

}
