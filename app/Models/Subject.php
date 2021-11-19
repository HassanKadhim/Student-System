<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'student_id',
        'subject_id'
    ];

    public function stage(){
        return $this->belongsTo(Stage::class);
    }

    public function timesheets(){
        return $this->hasMany(Timesheet::class);
    }
    use HasFactory;
}
