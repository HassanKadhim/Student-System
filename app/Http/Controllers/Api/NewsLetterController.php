<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsLetter;

class NewsLetterController extends Controller {

    // Get newsletter 
    public function newsletter(){
        $newsletter = NewsLetter::orderByDesc('id')->get(['id','title', 'body' ,'image_path','created_at as date']);
        return response()->json($newsletter);
    }
}
