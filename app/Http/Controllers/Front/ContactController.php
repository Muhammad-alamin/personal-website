<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $title ['title'] = 'Muhammad Alamin | Contact';
        return view('front.contact', $title);
    }
}
