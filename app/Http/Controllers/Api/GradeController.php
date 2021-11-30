<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller {

    // Get grade 
    public function grade(){
        $grade = auth()->user()->student()->with(['grades' => function($q){
            return $q->with(['subject:id,name','exam:id,name']);
        }])->orderByDesc('id')->get();

        return response()->json($grade);
    }
}
