<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $title['title'] = 'Muhammad Alamin | Dashboard ';
        return view('admin.dashboard',$title);
    }
}
