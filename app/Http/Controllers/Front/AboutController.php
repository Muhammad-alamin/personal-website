<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $title ['title'] = 'Muhammad Alamin | About';
        return view('front.about', $title);
    }
}
