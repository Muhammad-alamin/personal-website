<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
        $title ['title'] = 'Muhammad Alamin | Portfolio';
        return view('front.portfolio', $title);
    }
}
