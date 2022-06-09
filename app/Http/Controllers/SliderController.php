<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy("position","ASC")->get();
        return view("admin.sliders.index",compact("sliders"));
    }

    public function store(Request $request){
        $request->validate(["url"]);

        if($request->hasFile('url')){
            $slider = new Slider();
            $image = Image::make($request->file("url"))->encode("jpg",80);
            $fileName = Str::uuid().".jpg";
            $path = Storage::disk("public")->put("sliders/$fileName",$image);
            if($path == 1){
                $path = "storage/sliders/".$fileName;
            }else{
                return abort(500);
            }
            $slider->url = $path;
            $slider->save();
        }
        return redirect()->back()->with("success","Slider added successful");
    }

    public function delete(Request $request){
        $slider = Slider::where("id",$request->id)->firstOrFail();
        if(Storage::exists(Str::replace("storage","",$slider->url))){
            Storage::delete(Str::replace("storage","",$slider->url));
        }
        $slider->delete();
        return redirect()->back()->with("success","Slider deleted successful");
    }

    public function sortable(Request $request){
        foreach ($request->get("page") as $key => $order){
            Slider::where("id",$order)->update(["position"=>$key]);
        }
    }
}
