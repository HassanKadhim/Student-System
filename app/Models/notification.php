<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $fillable = [
        'title',
        'body',
        'student_id'
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
    use HasFactory;
}
