<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }
    use HasFactory;
}
