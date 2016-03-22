<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    $cats = scandir("/var/www/cats911/public/assets/img/cats/");
    $pics = array();
    $i = 0;
    shuffle($cats);
    foreach($cats as $cat) {
      if(strpos($cat, ".jpg") > 0) {
        if($i < 10)
          $pics[] = "<img src='//cats.shdwlf.com/assets/img/cats/$cat' class='cat' style='display:none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-height: 60%; max-width: 100%;' />";
      }
    }

    return view("index", array("pics" => $pics));
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
