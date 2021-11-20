<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'grade' ,   
        'exam_id',
        'student_id'
    ];

    public function sbject(){
        return $this->belongsTo(Subject::class);
    }


    public function grades(){
        return $this->hasMany(Grade::class);
    }

    use HasFactory;
}
