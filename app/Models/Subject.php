<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function eaxms(){
        return $this->hasMany(Exam::class);
    }
    use HasFactory;
}
