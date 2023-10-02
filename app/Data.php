<?php

namespace App;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Data extends Model
{

    protected $table = 'datas';
    protected $fillable = ['name', 'email', 'phone', 'data_date', 'birthday', 'category', 'reference', 'consultant_id', 'marital_status', 'job', 'city', 'status', 'program', 'country', 'education', 'content'];

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }

    public function processes()
    {
        return $this->hasMany(Process::class);
    }

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id', 'id');
    }
}
