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

Route::get('/', ['as'=>'home' ,function () {
    return view('welcome');
}]);

Route::get('/article/{id}', ['as'=>'article' ,function ($id) {
   echo $id;
}]);

Route::get('/page/{cat}/{id}', function($cat,$id) {

    echo '<pre>';

    echo $id.'|'.$cat;

    //print_r($_ENV);
    //echo config('app.locale');
    //echo Config::set('app.locale','ru');
    //echo Config::get('app.locale');
    //echo env('APP_ENV');
    echo '</pre>';
});/*->where([
    'id'=>'[0-9]+',
    'cat'=>'[A-Za-z]+'
]);*/


//Route::post('/comments',function(){
//    print_r($_POST);
//});
//Route::match(['get','post'],'/comments',function(){
//    print_r($_POST);
//});

//Route::any('/comments', function (){
//    print_r($_POST);
//});
Route::post('/comments', function (){
    print_r($_POST);
});

Route::group(['prefix'=>'admin/{id}'],function (){
    Route::get('page/create/{var}', function ($id){
        $route = Route::current();
        //echo $route->getName();
        //echo $route->parameter('var',24);
        print_r($route->parameters());
        //return redirect()->route('article',array('id'=>25));
    })->name('createpage');
    Route::get('page/edit', function (){
        echo 'page/edit';
    });
});