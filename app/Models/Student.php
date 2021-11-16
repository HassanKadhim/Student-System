<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =[
        'card_number',
        'mother_name',
        'city',
        'district',
        'phoneNumbe',
        'type'
    ];
    public function timesheets(){
        return $this->hasMany(Timesheet::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
