<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy("updated_at","DESC")->get();
        return view("admin.services.index",compact("services"));
    }

    public function create(){
        return view("admin.services.create");
    }

    public function store(Request $request){
        $request->validate([
            "title_tr"=>"required",
            "title_en"=>"required",
            "title_ar"=>"required",
            "title_ru"=>"required",
            "subcontent_tr"=>"required",
            "subcontent_en"=>"required",
            "subcontent_ar"=>"required",
            "subcontent_ru"=>"required",
            "content_tr"=>"required",
            "content_en"=>"required",
            "content_ar"=>"required",
            "content_ru"=>"required",
            "keywords_tr"=>"required",
            "keywords_en"=>"required",
            "keywords_ar"=>"required",
            "keywords_ru"=>"required",
            "descriptions_tr"=>"required",
            "descriptions_en"=>"required",
            "descriptions_ar"=>"required",
            "descriptions_ru"=>"required",
            "title_image"=>"required",
            "is_active"=>"required"
        ]);

        $service = new Service();
        $service->title_tr = $request->title_tr;
        $service->title_en = $request->title_en;
        $service->title_ar = $request->title_ar;
        $service->title_ru = $request->title_ru;

        $service->slug_tr = Str::slug($request->title_tr);
        $service->slug_en = Str::slug($request->title_en);
        $service->slug_ar = Str::slug($request->title_ar);
        $service->slug_ru = Str::slug($request->title_ru);

        $service->subcontent_tr = $request->subcontent_tr;
        $service->subcontent_en = $request->subcontent_en;
        $service->subcontent_ar = $request->subcontent_ar;
        $service->subcontent_ru = $request->subcontent_ru;
        $service->content_tr = $request->content_tr;
        $service->content_en = $request->content_en;
        $service->content_ar = $request->content_ar;
        $service->content_ru = $request->content_ru;
        $service->keywords_tr = $request->keywords_tr;
        $service->keywords_en = $request->keywords_en;
        $service->keywords_ar = $request->keywords_ar;
        $service->keywords_ru = $request->keywords_ru;
        $service->descriptions_tr = $request->descriptions_tr;
        $service->descriptions_en = $request->descriptions_en;
        $service->descriptions_ar = $request->descriptions_ar;
        $service->descriptions_ru = $request->descriptions_ru;
        $service->is_active = $request->is_active == "true" ? true: false;

        if($request->hasFile('title_image')){
            $path = Storage::putFile("public/services",new File($request->file("title_image")),"public");
            $path = Str::replace("public","storage",$path);
            $service->title_image = $path;
        }

        $service->save();

        if($request->hasFile('slides')){
            foreach ($request->file("slides") as $slide){
                $gallery = new Gallery();
                $path = Storage::putFile("public/gallery",new File($slide),"public");
                $path = Str::replace("public","storage",$path);
                $gallery->image = $path;
                $gallery->service_id = $service->id;
                $gallery->save();
            }
        }

        return redirect("/admin/services")->with("success","Service updated successful");
    }

    public function edit($id){
        $service = Service::where("id",$id)->firstOrFail();

        return view("admin.services.edit",compact("service"));
    }

    public function update($id, Request $request){
        $request->validate([
            "title_tr"=>"required",
            "title_en"=>"required",
            "title_ar"=>"required",
            "title_ru"=>"required",
            "subcontent_tr"=>"required",
            "subcontent_en"=>"required",
            "subcontent_ar"=>"required",
            "subcontent_ru"=>"required",
            "content_tr"=>"required",
            "content_en"=>"required",
            "content_ar"=>"required",
            "content_ru"=>"required",
            "keywords_tr"=>"required",
            "keywords_en"=>"required",
            "keywords_ar"=>"required",
            "keywords_ru"=>"required",
            "descriptions_tr"=>"required",
            "descriptions_en"=>"required",
            "descriptions_ar"=>"required",
            "descriptions_ru"=>"required",
            "is_active"=>"required"
        ]);

        $service = Service::findOrFail($id);
        $service->title_tr = $request->title_tr;
        $service->title_en = $request->title_en;
        $service->title_ar = $request->title_ar;
        $service->title_ru = $request->title_ru;

        $service->slug_tr = Str::slug($request->title_tr);
        $service->slug_en = Str::slug($request->title_en);
        $service->slug_ar = Str::slug($request->title_ar);
        $service->slug_ru = Str::slug($request->title_ru);

        $service->subcontent_tr = $request->subcontent_tr;
        $service->subcontent_en = $request->subcontent_en;
        $service->subcontent_ar = $request->subcontent_ar;
        $service->subcontent_ru = $request->subcontent_ru;
        $service->content_tr = $request->content_tr;
        $service->content_en = $request->content_en;
        $service->content_ar = $request->content_ar;
        $service->content_ru = $request->content_ru;
        $service->keywords_tr = $request->keywords_tr;
        $service->keywords_en = $request->keywords_en;
        $service->keywords_ar = $request->keywords_ar;
        $service->keywords_ru = $request->keywords_ru;
        $service->descriptions_tr = $request->descriptions_tr;
        $service->descriptions_en = $request->descriptions_en;
        $service->descriptions_ar = $request->descriptions_ar;
        $service->descriptions_ru = $request->descriptions_ru;
        $service->is_active = $request->is_active == "true" ? true: false;

        if($request->hasFile('title_image')){
            if(Storage::exists(Str::replace("storage","public",$service->title_image))){
                Storage::delete(Str::replace("storage","public",$service->title_image));
            }
            $path = Storage::putFile("public/services",new File($request->file("title_image")),"public");
            $path = Str::replace("public","storage",$path);
            $service->title_image = $path;
        }

        if($request->hasFile('slides')) {
            $galleries = Gallery::where("service_id", $service->id)->get();

            if ($galleries->count() > 0) {
                foreach ($galleries as $gallery) {
                    if (Storage::exists(Str::replace("storage", "public", $gallery->image))) {
                        Storage::delete(Str::replace("storage", "public", $gallery->image));
                    }
                    $gallery->delete();
                }
            }

            foreach ($request->file("slides") as $slide){
                $gallery = new Gallery();
                $path = Storage::putFile("public/gallery",new File($slide),"public");
                $path = Str::replace("public","storage",$path);
                $gallery->image = $path;
                $gallery->service_id = $service->id;
                $gallery->save();
            }
        }

        $service->save();

        return redirect()->back()->with("success","Service updated successful");
    }

    public function delete(Request $request){
        $request->validate(["id"=>"required"]);
        $service = Service::findOrFail($request->id);
        if(Storage::exists(Str::replace("storage","public",$service->title_image))){
            Storage::delete(Str::replace("storage","public",$service->title_image));
        }

        $galleries = Gallery::where("service_id",$request->id)->get();

        if($galleries->count() > 0){
            foreach ($galleries as $gallery){
                if(Storage::exists(Str::replace("storage","public",$gallery->image))){
                    Storage::delete(Str::replace("storage","public",$gallery->image));
                }
            }
        }

        $service->delete();
        return redirect()->back()->with("success","Service deleted successful");
    }
}
