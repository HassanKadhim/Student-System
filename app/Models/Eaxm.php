<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eaxm extends Model
{
    public function sbject(){
        return $this->belongsTo(Subject::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }


    use HasFactory;
}
