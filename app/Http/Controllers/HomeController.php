<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\photo;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=photo::all();
        return view('home.index',[
            'sliderdata'=>$sliderdata
        ]);
    }

    public function service($id){
        $data=Service::find($id);
        return view('home.service',[
            'data'=>$data
        ]);
    }

}
