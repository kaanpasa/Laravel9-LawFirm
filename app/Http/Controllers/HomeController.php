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
        $data=Category::all();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'data'=>$data
        ]);
    }

    public function service($id){
        $data=Service::find($id);
        return view('home.service',[
            'data'=>$data
        ]);
    }

    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

}
