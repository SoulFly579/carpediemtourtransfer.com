<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MaintenanceMod
{

    public $expects = ["admin"];
    public $maintenance_link = "en/maintenance";
    public $langs = ["en","tr","ar","ru"];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $setting = Setting::firstOrCreate();

        if($setting->maintenance){
            $exploded = explode("/",$request->path());

            if(in_array($exploded[0],$this->langs)){
                array_shift($exploded);
                $status = $this->checkPath(implode("/",$exploded));
            }else{
                $status = $this->checkPath(implode("/",$exploded));
            }

            if($status){
                return $next($request);
            }else{
                return redirect($this->maintenance_link);
            }
        }else{
            if($request->path() == $this->maintenance_link){
                return redirect("/en");
            }
            return $next($request);
        }

    }

    public function checkPath($path) : Bool {
        if($path == explode("/",$this->maintenance_link)[1] || in_array( explode("/",$path)[0],$this->expects)){
            return true;
        }else{
            return false;
        }
    }
}
