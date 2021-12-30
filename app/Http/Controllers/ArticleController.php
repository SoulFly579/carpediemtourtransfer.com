<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy("updated_at","DESC")->get();
        return view("admin.articles.index",compact("articles"));
    }

    public function create(){
        return view("admin.articles.create");
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

        $article = new Article();
        $article->title_tr = $request->title_tr;
        $article->title_en = $request->title_en;
        $article->title_ar = $request->title_ar;
        $article->title_ru = $request->title_ru;

        $article->slug_tr = Str::slug($request->title_tr);
        $article->slug_en = Str::slug($request->title_en);
        $article->slug_ar = Str::slug($request->title_ar);
        $article->slug_ru = Str::slug($request->title_ru);

        $article->subcontent_tr = $request->subcontent_tr;
        $article->subcontent_en = $request->subcontent_en;
        $article->subcontent_ar = $request->subcontent_ar;
        $article->subcontent_ru = $request->subcontent_ru;
        $article->content_tr = $request->content_tr;
        $article->content_en = $request->content_en;
        $article->content_ar = $request->content_ar;
        $article->content_ru = $request->content_ru;
        $article->keywords_tr = $request->keywords_tr;
        $article->keywords_en = $request->keywords_en;
        $article->keywords_ar = $request->keywords_ar;
        $article->keywords_ru = $request->keywords_ru;
        $article->descriptions_tr = $request->descriptions_tr;
        $article->descriptions_en = $request->descriptions_en;
        $article->descriptions_ar = $request->descriptions_ar;
        $article->descriptions_ru = $request->descriptions_ru;
        $article->is_active = $request->is_active == "true" ? true: false;

        if($request->hasFile('title_image')){
            $path = Storage::putFile("public/articles",new File($request->file("title_image")),"public");
            $path = Str::replace("public","storage",$path);
            $article->title_image = $path;
        }


        $article->save();

        if($request->hasFile('slides')){
            foreach ($request->file("slides") as $slide){
                $gallery = new Gallery();
                $path = Storage::putFile("public/gallery",new File($slide),"public");
                $path = Str::replace("public","storage",$path);
                $gallery->image = $path;
                $gallery->article_id = $article->id;
                $gallery->save();
            }
        }

        return redirect("/admin/articles")->with("success","Articles updated successful");
    }

    public function edit($id){
        $article = Article::where("id",$id)->firstOrFail();

        return view("admin.articles.edit",compact("article"));
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

        $article = Article::findOrFail($id);
        $article->title_tr = $request->title_tr;
        $article->title_en = $request->title_en;
        $article->title_ar = $request->title_ar;
        $article->title_ru = $request->title_ru;

        $article->slug_tr = Str::slug($request->title_tr);
        $article->slug_en = Str::slug($request->title_en);
        $article->slug_ar = Str::slug($request->title_ar);
        $article->slug_ru = Str::slug($request->title_ru);

        $article->subcontent_tr = $request->subcontent_tr;
        $article->subcontent_en = $request->subcontent_en;
        $article->subcontent_ar = $request->subcontent_ar;
        $article->subcontent_ru = $request->subcontent_ru;
        $article->content_tr = $request->content_tr;
        $article->content_en = $request->content_en;
        $article->content_ar = $request->content_ar;
        $article->content_ru = $request->content_ru;
        $article->keywords_tr = $request->keywords_tr;
        $article->keywords_en = $request->keywords_en;
        $article->keywords_ar = $request->keywords_ar;
        $article->keywords_ru = $request->keywords_ru;
        $article->descriptions_tr = $request->descriptions_tr;
        $article->descriptions_en = $request->descriptions_en;
        $article->descriptions_ar = $request->descriptions_ar;
        $article->descriptions_ru = $request->descriptions_ru;
        $article->is_active = $request->is_active == "true" ? true: false;

        if($request->hasFile('title_image')){
            if(Storage::exists(Str::replace("storage","public",$article->title_image))){
                Storage::delete(Str::replace("storage","public",$article->title_image));
            }
            $path = Storage::putFile("public/articles",new File($request->file("title_image")),"public");
            $path = Str::replace("public","storage",$path);
            $article->title_image = $path;
        }
        if($request->hasFile('slides')) {
            $galleries = Gallery::where("article_id", $article->id)->get();

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
                $gallery->article_id = $article->id;
                $gallery->save();
            }
        }

        $article->save();

        return redirect()->back()->with("success","Articles updated successful");
    }

    public function delete(Request $request){
        $request->validate(["id"=>"required"]);
        $article = Article::findOrFail($request->id);
        if(Storage::exists(Str::replace("storage","public",$article->title_image))){
            Storage::delete(Str::replace("storage","public",$article->title_image));
        }

        $galleries = Gallery::where("article_id",$request->id)->get();

        if($galleries->count() > 0){
            foreach ($galleries as $gallery){
                if(Storage::exists(Str::replace("storage","public",$gallery->image))){
                    Storage::delete(Str::replace("storage","public",$gallery->image));
                }
            }
        }


        $article->delete();
        return redirect()->back()->with("success","Article deleted successful");
    }
}
