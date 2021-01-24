<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume(){
        $title ['title'] = 'Alamin | Resume';
        return view('front.resume', $title);
    }
}
