<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\photo;
use App\Models\Message;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            'data'=>$data,
        ]);
    }

    public function service($id){
        $data=Service::find($id);
        $reviews = Comment::where('service_id',$id)->where('status','True')->get();
        return view('home.service',[
            'data'=>$data,
            'reviews'=>$reviews
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

    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
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

    public function storecomment(Request $request){
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->IP = request()->ip();
        $data->save();

        return redirect()->route('service',['id'=>$request->input('service_id')])->with('info','Your comment has been sent, thank you.');
    }

    public function storeappointment(Request $request){
        //dd($request);
        $data = new Appointment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->subject = $request->input('subject');
        $data->price = 20;
        $data->payment = 'No';
        $data->IP = request()->ip();
        $data->save();

        return redirect()->back()->with('info','Your Appointment has created, thank you.');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
                ])-onlyInput('email');
    }

}
