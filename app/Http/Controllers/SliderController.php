<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view("admin.sliders.index",compact("sliders"));
    }

    public function store(Request $request){
        $request->validate(["url"]);

        if($request->hasFile('url')){
            $slider = new Slider();
            $path = Storage::putFile("public/sliders",new File($request->file("url")),"public");
            $path = Str::replace("public","storage",$path);
            $slider->url = $path;
            $slider->save();
        }
        return redirect()->back()->with("success","Slider added successful");
    }

    public function delete(Request $request){
        $slider = Slider::where("id",$request->id)->firstOrFail();
        if(Storage::exists(Str::replace("storage","public",$slider->url))){
            Storage::delete(Str::replace("storage","public",$slider->url));
        }
        $slider->delete();
        return redirect()->back()->with("success","Slider deleted successful");
    }
}
