<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title){
        if($category->category_id == 0){
            return $title;
        }
        $category = Category::find($category->category_id);
        $title = $category->title . ' > ' . $title;
        return CategoryController::getParentsTree($category, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.service.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.service.create',[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data= new Service();
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('public/images');
        }
        $data->detail = $request->detail;
       $data->save();
       return redirect('admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $Service,$id)
    {
        $data = Service::find($id);
        return view('admin.service.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $Service, $id)
    {
        $data = Service::find($id);
        $datalist = Category::all();
        return view('admin.service.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $Service,$id)
    {
        $data= Service::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('public/images');
        }
        $data->detail = $request->detail;
        $data->save();
        return redirect('admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $Service,$id)
    {
        $data=Service::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/service');
    }
}
