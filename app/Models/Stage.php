<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function subjects(){
        return $this->hasMany(Subject::class);
    }
    
    public function department(){
        return $this->belongsTo(Department::class);
    }
    use HasFactory;
}
