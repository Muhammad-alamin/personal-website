<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $title ['title'] = 'Muhammad Alamin | Services';
        return view('front.service', $title);
    }
}
