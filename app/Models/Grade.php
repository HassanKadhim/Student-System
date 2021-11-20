<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name',
    ];


    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function exam(){
        return $this->belongsTo(Exam::class);
    }   
    
    use HasFactory;
}
