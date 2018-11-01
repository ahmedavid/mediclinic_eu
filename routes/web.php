<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/en');
});

Route::prefix('en')->group( function (){
    Route::get('',function(){
        $lang = 'en';
        $current_page = '';
        $nav_path = storage_path() . "/app/json/nav.json";
        $home_path = storage_path() . "/app/json/home-content.json";
        $nav_json = json_decode(file_get_contents($nav_path), true);
        $home_json = json_decode(file_get_contents($home_path), true);
        $navs = $nav_json['en'];
        $hero = $home_json['en']['hero'];
        $description = $home_json['en']['description'];
        $main_features = $home_json['en']['main-features'];
        $common_features = $home_json['en']['common-features'];
        $form = $home_json['en']['form'];
        return view('pages.index',compact(['navs','hero','description','main_features','form','common_features','lang','current_page']));
    });
    Route::get('/pricing','PricingController@index');
});

Route::prefix('de')->group( function (){
    Route::get('',function(){
        $lang = 'de';
        $current_page = '';
        $nav_path = storage_path() . "/app/json/nav.json";
        $home_path = storage_path() . "/app/json/home-content.json";
        $nav_json = json_decode(file_get_contents($nav_path), true);
        $home_json = json_decode(file_get_contents($home_path), true);
        $navs = $nav_json['de'];
        $hero = $home_json['de']['hero'];
        $description = $home_json['de']['description'];
        $main_features = $home_json['de']['main-features'];
        $common_features = $home_json['de']['common-features'];
        $form = $home_json['de']['form'];
        return view('pages.index',compact(['navs','hero','description','main_features','form','common_features','lang','current_page']));
    });
});

