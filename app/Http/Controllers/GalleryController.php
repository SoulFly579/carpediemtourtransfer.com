<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
            $image = Image::make($request->file("image"))->encode("jpg",50);
            $fileName = Str::uuid().".jpg";
            $path = Storage::disk("public")->put("gallery/$fileName",$image);
            if($path == 1){
                $path = "storage/gallery/".$fileName;
            }else{
                return abort(500);
            }
            $gallery->image = $path;
            $gallery->save();
        }
        return redirect()->back()->with("success","Gallery added successful");
    }

    public function delete(Request $request){
        $gallery = Gallery::where("id",$request->id)->firstOrFail();
        if(Storage::exists(Str::replace("storage","",$gallery->image))){
            Storage::delete(Str::replace("storage","",$gallery->image));
        }
        $gallery->delete();
        return redirect()->back()->with("success","Gallery deleted successful");
    }

    public function selected_gallery_delete(Request $request){
        $galleries = Gallery::whereIn("id",$request->ids)->get();
        foreach($galleries as $gallery){
            if(Storage::exists(Str::replace("storage","",$gallery->image))){
                Storage::delete(Str::replace("storage","",$gallery->image));
            }

            $gallery->delete();
        }
        return redirect("/admin/services")->with("success","Selected images deleted.");
    }
}
