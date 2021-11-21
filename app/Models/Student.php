<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =[
        'user_id',
        'stage_id',
        'card_number',
        'mother_name',
        'city',
        'district',
        'phoneNumber',
        'type',
        'gender',
        'birthday'
    ];
    public function timesheets(){
        return $this->hasMany(Timesheet::class);
    }
    
    public function notifications(){
        return $this->hasMany(notification::class);
    }

    public function grades(){
        return $this->hasMany(Grade::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stage(){
        return $this->belongsTo(Stage::class);
    }
    use HasFactory;
}
