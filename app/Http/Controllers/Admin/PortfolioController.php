<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $title ['title'] = 'Muhammad Alamin | Portfolio List';
        $title['title'] = 'Portfoilio List';
        $data['getData'] = Portfolio::orderBy('id','DESC')->paginate(5);
        return view('admin.portfolio.index',$title,$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title ['title'] = 'Muhammad Alamin | Portfolio';
        $breadcrumb['breadcrumb'] = 'Portfoilio';
        return view('admin.portfolio.create',$breadcrumb,$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>   'required',
            'category'      =>   'required',
            'Project_url'   =>   'required',
            'client'        =>   'required',
            'thumbnailImage'=>   'mimes:jpeg,jpg,png',
            'sliderImages.*'   => 'mimes:jpeg,jpg,png'
        ]);


        $portfolio = new Portfolio();

        $portfolio->name = $request->name;
        $portfolio->category = $request->category;
        $portfolio->description = $request->description;
        $portfolio->Project_url = $request->Project_url;

        if($request->hasFile('thumbnailImage')){

            $path = 'images/portfolio/';
            $img = $request->file('thumbnailImage');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            // $img->move($path,$file_name);
            Image::make($img)->resize(500,300)->save($path.$file_name);


            if ($portfolio->thumbnailImage != null && file_exists($portfolio->thumbnailImage )){
                unlink($portfolio->thumbnailImage );
            }

            $portfolio->thumbnailImage  = $path .'/'. $file_name;

            $getSlider=[];
         if($request->hasFile('sliderImages'))
        {
            $sliders = $request->file('sliderImages');

            foreach ( $sliders as $eachSlider) {
                $path = 'images/sliders/';
                $file_name = rand(0000,9999).'-'.$eachSlider->getFilename().$eachSlider->getClientOriginalName();
                // $eachSlider->move($path,$file_name);
                Image::make($eachSlider)->resize(500,370)->save($path.$file_name);

                $getSlider[] = $file_name;

            }

            $singleSlider = json_encode($getSlider);

            $portfolio->sliderImage =$singleSlider;

        }

        }
        $portfolio->save();
        Alert::success('success','Portfolio Created Successfully');
        return redirect()->route('portfolio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title ['title'] = 'Muhammad Alamin | Portfolio Edit';
        $title['title'] = 'Portfolio Edit';
        $data['portfolio'] = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit',$title,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          =>   'required',
            'category'      =>   'required',
            'Project_url'   =>   'required',
            'client'        =>   'required',
            'thumbnailImage'=>   'mimes:jpeg,jpg,png',
            'sliderImages.*'   => 'mimes:jpeg,jpg,png'
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->name = $request->name;
        $portfolio->category = $request->category;
        $portfolio->description = $request->description;
        $portfolio->Project_url = $request->Project_url;

        if($request->hasFile('thumbnailImage')){

            $path = 'images/portfolio/';
            $img = $request->file('thumbnailImage');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            //$img->move($path,$file_name);
            Image::make($img)->resize(500,300)->save($path.$file_name);


            if ($portfolio->thumbnailImage != null && file_exists($portfolio->thumbnailImage )){
                unlink($portfolio->thumbnailImage );
            }

            $portfolio->thumbnailImage  = $path .'/'. $file_name;



            $getSlider=[];
            if($request->hasFile('sliderImages'))
            {
                $sliders = $request->file('sliderImages');

                foreach ( $sliders as $eachSlider) {
                    $path = 'images/sliders/';
                    $file_name = rand(0000,9999).'-'.$eachSlider->getFilename().$eachSlider->getClientOriginalName();
                    //$eachSlider->move($path,$file_name);
                    Image::make($eachSlider)->resize(500,370)->save($path.$file_name);
                    $getSlider[] = $file_name;

                }

                    $slider = json_decode($portfolio->sliderImage);
                    $path = 'images/sliders/';
                    foreach ($slider as $eachSlider){
                            unlink($path . $eachSlider);
                    }

                $singleSlider = json_encode($getSlider);
                $portfolio->sliderImage =$singleSlider;

            }

        }
        $portfolio->save();
        Alert::success('success','Portfolio Updated Successfully');

        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $slider = json_decode($portfolio->sliderImage);
        $path = 'images/sliders/';

            foreach ($slider as $eachSlider) {
                    unlink($path . $eachSlider);
            }
            if ($portfolio->thumbnailImage != null && file_exists($portfolio->thumbnailImage )){
                unlink($portfolio->thumbnailImage);
            }

        Portfolio::destroy($id);
        Alert::success('success','Portfolio Deleted Successfully');
        return redirect()->route('portfolio.index');
    }
}
