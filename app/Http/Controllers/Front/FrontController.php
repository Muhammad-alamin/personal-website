<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $title ['title'] = 'Alamin | Home';
        return  view('front.home', $title);
    }
}
