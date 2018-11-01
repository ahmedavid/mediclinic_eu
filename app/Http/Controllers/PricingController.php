<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        $lang = 'en';
        $current_page = 'pricing';
        $nav_path = storage_path() . "/app/json/nav.json";
        $pricing_path = storage_path() . "/app/json/pricing-content.json";
        $nav_json = json_decode(file_get_contents($nav_path), true);
        $pricing_json = json_decode(file_get_contents($pricing_path), true);

        $navs = $nav_json['en'];
        $title = $pricing_json['en']['title'];
        $plans = $pricing_json['en']['plans'];
        return view('pages.pricing',compact(['navs','lang','current_page','title','plans']));
    }

    public static function getIconClass($name){
        switch ($name) {
            case "Starter":
                return 'plan-icon-1';
            case "Professional":
                return 'plan-icon-2';
            case "Premium":
                return 'plan-icon-3';
            default:
                return 'plan-icon-1';
        }
    }

    public static function getButtonClass($name){
        switch ($name) {
            case "Starter":
                return 'btn-success';
            case "Professional":
                return 'btn-info';
            case "Premium":
                return 'btn-primary';
            default:
                return 'btn-primary';
        }
    }
}
