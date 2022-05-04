<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=Category::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata
        ]);
    }

}
