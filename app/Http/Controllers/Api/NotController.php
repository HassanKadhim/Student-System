<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotController extends Controller {

    public function not() {
    $not = auth()->user()->student()->with('notifications')->orderByDesc('id')->get('id','notifications');

    return response()->json($not);
    
    }
}
