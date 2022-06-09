<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function get()
    {
        $settings = Setting::firstOrCreate();
        return view("admin.settings",compact("settings"));
    }

    public function set(Request $request)
    {
        $settings = Setting::firstOrCreate();
        $settings->facebook_link = $request->facebook_link;
        $settings->instagram_link = $request->instagram_link;
        $settings->tiktok_link = $request->tiktok_link;
        $settings->twitter_link = $request->twitter_link;
        $settings->youtube_link = $request->youtube_link;
        $settings->whatsapp_link = $request->whatsapp_link;
        $settings->contact_number = $request->contact_number;
        $settings->maintenance = $request->maintenance == "true" ? true : false;
        $settings->save();

        return redirect()->back()->with("success","Settings updated with successfully");
    }
}
