<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function timesheets(){
        return $this->hasMany(Timesheet::class);
    }
    use HasFactory;
}
