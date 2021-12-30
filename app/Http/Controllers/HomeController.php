<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\About;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function home(){
        $sliders = Cache::remember('sliders', 86400, function () {
            return Slider::all();
        });
        $services = Cache::remember('services_for_home', 86400, function () {
            return Service::select("id","title_image","title_tr","title_en","title_ar","title_ru","subcontent_tr","subcontent_en","subcontent_ar","subcontent_ru","slug_en")->where("is_active",true)->orderBy("updated_at","DESC")->get();
        });
        return view("index",compact("sliders","services"));
    }

    public function contact(){

        return view("contact");
    }

    public function services(){
        $services = Cache::remember('services', 86400, function () {
            return Service::select(["id","title_image","title_tr","title_en","title_ar","title_ru","subcontent_tr","subcontent_en","subcontent_ar","subcontent_ru","slug_en"])->where("is_active",true)->orderBy("updated_at","DESC")->get();
        });
        return view("services",compact("services"));
    }

    public function services_detail($lang,$slug,$id)
    {
//        $services = Service::where("is_active",true)->orderBy("updated_at","DESC")->get();
        $services = Cache::remember('services_for_sidebar', 86400, function () {
            return Service::select("id","title_tr","title_en","title_ar","title_ru")->where("is_active",true)->orderBy("updated_at","DESC")->get();
        });

        $service = Cache::remember('service_single', 86400, function () use ($slug,$id){
            return Service::where("is_active",true)->where("slug_en",$slug)->where("id",$id)->firstOrFail();
        });

        switch (app()->getLocale()){
            case "tr":
                SEOTools::setTitle($service->title_tr);
                SEOTools::setDescription($service->descriptions_tr);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($service->title_image));
                break;
            case "en":
                SEOTools::setTitle($service->title_en);
                SEOTools::setDescription($service->descriptions_en);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($service->title_image));
                break;
            case "ar":
                SEOTools::setTitle($service->title_ar);
                SEOTools::setDescription($service->descriptions_ar);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($service->title_image));
                break;
            case "ru":
                SEOTools::setTitle($service->title_ru);
                SEOTools::setDescription($service->descriptions_ru);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($service->title_image));
                break;
        }

        return view("service_single",compact("service","services"));
    }

    public function login(){
        return view("admin.login");
    }

    public function corporate(){

        $about = Cache::remember('about', 86400, function () {
            return About::firstOrFail();
        });

        switch (app()->getLocale()){
            case "tr":
                SEOTools::setTitle("Kurumsal");
                SEOTools::setDescription($about->descriptions_tr);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                break;
            case "en":
                SEOTools::setTitle("Corporate");
                SEOTools::setDescription($about->descriptions_en);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                break;
            case "ar":
                //TODO: buraya mutlaka başlık yaz
                SEOTools::setDescription($about->descriptions_ar);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                break;
            case "ru":
                //TODO: buraya mutlaka başlık yaz
                SEOTools::setDescription($about->descriptions_ru);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                break;
        }
        return view("corporate",compact("about"));
    }

    public function blog(){
        $articles = Article::where("is_active",true)->orderBy("updated_at","DESC")->get();
        return view("blog",compact("articles"));
    }

    public function blog_detail($lang,$slug,$id)
    {
        $articles = Article::where("is_active",true)->orderBy("updated_at","DESC")->limit(5)->get();
        $article = Article::where("is_active",true)->where("slug_en",$slug)->where("id",$id)->firstOrFail();

        switch (app()->getLocale()){
            case "tr":
                SEOTools::setTitle($article->title_tr);
                SEOTools::setDescription($article->descriptions_tr);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($article->title_image));
                break;
            case "en":
                SEOTools::setTitle($article->title_en);
                SEOTools::setDescription($article->descriptions_en);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($article->title_image));
                break;
            case "ar":
                SEOTools::setTitle($article->title_ar);
                SEOTools::setDescription($article->descriptions_ar);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($article->title_image));
                break;
            case "ru":
                SEOTools::setTitle($article->title_ru);
                SEOTools::setDescription($article->descriptions_ru);
                SEOTools::opengraph()->setUrl(url()->current());
                SEOTools::setCanonical(url()->current());
                SEOTools::opengraph()->addProperty('type', 'articles');
                SEOTools::jsonLd()->addImage(url($article->title_image));
                break;
        }

        return view("blog_single",compact("article","articles"));
    }

    public function gallery(){
        $slides = Gallery::where("article_id",null)->where("service_id",null)->get();
        return view("gallery",compact("slides"));
    }

    public function references(){
        return view("references");
    }
    public function search(Request $request){
        $request->validate(["search"=>"required"]);
        $articles = Article::orWhere("title_tr","LIKE","%".$request->search."%")->orWhere("title_en","LIKE","%".$request->search."%")->orWhere("title_ar","LIKE","%".$request->search."%")->orWhere("title_ru","LIKE","%".$request->search."%")->get();
        $services = Service::orWhere("content_tr","LIKE","%".$request->search."%")->orWhere("content_en","LIKE","%".$request->search."%")->orWhere("content_ar","LIKE","%".$request->search."%")->orWhere("content_ru","LIKE","%".$request->search."%")->get();
        return view("search",compact("articles","services"));
    }

    public function terms(){
        return view("terms");
    }
}
