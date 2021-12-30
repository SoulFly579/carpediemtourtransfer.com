<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        return view("admin.gallery.index",compact("galleries"));
    }

    public function store(Request $request){
        $request->validate(["title","image"]);
        $gallery = new Gallery();
        $gallery->title = $request->title;
        if($request->hasFile('image')){
            $path = Storage::putFile("public/gallery",new File($request->file("image")),"public");
            $path = Str::replace("public","storage",$path);
            $gallery->image = $path;
            $gallery->save();
        }
        return redirect()->back()->with("success","Gallery added successful");
    }

    public function delete(Request $request){
        $gallery = Gallery::where("id",$request->id)->firstOrFail();
        if(Storage::exists(Str::replace("storage","public",$gallery->image))){
            Storage::delete(Str::replace("storage","public",$gallery->image));
        }
        $gallery->delete();
        return redirect()->back()->with("success","Gallery deleted successful");
    }
}
