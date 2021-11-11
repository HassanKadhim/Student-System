<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function stages(){
        return $this->hasMany(Stage::class);
    }
    use HasFactory;
}
