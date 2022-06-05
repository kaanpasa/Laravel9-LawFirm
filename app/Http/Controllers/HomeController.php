<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\photo;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=photo::all();
        $data=Category::all();
        $setting=Setting::first();
        return view('home.index',[
            'setting'=>$setting,
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

    public function aboutus(){
        $setting=Setting::first();
        return view('home.aboutus',[
            'setting'=>$setting,
        ]);
    }

    public function references(){
        $setting=Setting::first();
        return view('home.references',[
            'setting'=>$setting,
        ]);
    }

    public function contact(){
        $setting=Setting::first();
        return view('home.contact',[
            'setting'=>$setting,
        ]);
    }

    public function storemessage(Request $request){
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, thank you.');
    }

}
