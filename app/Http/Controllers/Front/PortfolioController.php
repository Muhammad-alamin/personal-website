<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
        $title ['title'] = 'Muhammad Alamin | Portfolio';
        $data['portfolios'] = Portfolio::all();
        return view('front.portfolio', $data,$title);
    }
    public function details($id){
        $title ['title'] = 'Muhammad Alamin | Portfolio-details';
        $data = Portfolio::findOrFail($id);
        $eachData['eachData'] = $data->where('id',$id)->get();
        return view('front.portfolio-details',$title,$eachData);
    }
}
