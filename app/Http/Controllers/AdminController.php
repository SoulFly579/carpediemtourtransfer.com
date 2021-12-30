<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Service;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function about_detail()
    {
        $about = About::first();
        return view("admin.about",compact("about"));
    }

    public function about_set(Request $request)
    {
        $request->validate([
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
        ]);

        $about = About::first();
        if(!$about){
            $about = new About();
        }
        $about->content_tr = $request->content_tr;
        $about->content_en = $request->content_en;
        $about->content_ar = $request->content_ar;
        $about->content_ru = $request->content_ru;
        $about->keywords_tr = $request->keywords_tr;
        $about->keywords_en = $request->keywords_en;
        $about->keywords_ar = $request->keywords_ar;
        $about->keywords_ru = $request->keywords_ru;
        $about->descriptions_tr = $request->descriptions_tr;
        $about->descriptions_en = $request->descriptions_en;
        $about->descriptions_ar = $request->descriptions_ar;
        $about->descriptions_ru = $request->descriptions_ru;
        $about->save();
        return redirect()->back()->with("success","About saved successful");

    }

    public function login_post(Request $request){
        $request->validate(["email"=>"required","password"=>"required"]);
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->withErrors('Please check your email/password');
    }
    public function logout(){
        Auth::logout();
        return redirect("/admin/login");
    }

    public function dashboard(){
        $articles_count = Article::all()->count();
        $services_count = Service::all()->count();
        $slides = Gallery::all()->count();
        $last_article = Article::orderBy('updated_at', 'desc')->first();
        $last_service = Service::orderBy('updated_at', 'desc')->first();
        return view('admin/dashboard',compact("articles_count","services_count","slides","last_article","last_service"));
    }
}
