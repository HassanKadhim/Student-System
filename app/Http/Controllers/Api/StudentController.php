<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller {
    
    // Get student 
    public function student(){
        $students = auth()->user()->student()->with([
            'grades' => function($q){
                return $q->with(['subject:id,name','exam:id,name']);
        }, 'timesheets' => function($q){
            return $q->with(['subject:id,name']);
        }
        ])->orderByDesc('id')->get();

        return response()->json(['data' => $students]);
    }
}
