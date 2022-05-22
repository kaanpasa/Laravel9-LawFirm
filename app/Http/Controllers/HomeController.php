<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\photo;
use App\Models\Service;
use Illuminate\Http\Request;
use DB;

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

    public function categoryservices($id){
        $category = Category::find($id);
        $services = DB::table('services')->where('category_id', $id)->get();
        return view('home.categoryservices',[
            'category'=>$category,
            'services'=>$services
        ]);
    }

    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

}
