<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExampleController;

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

// Route::get('/{name}', function ($name) {
//     return view('welcome',['name'=>$name]);
// });
Route::get('/example/{name}',function($name)
{
    echo $name;
    return view('example');
});
// Route::get('/{name}', function ($name) {
//     echo $name;
//     return ('hello home');
// });
// Route::view('/user','user');//shortcut method
// Route::get('/usercontroller/{user}',[UserController::class,'index']);
Route::get('/egcontroller/{eg}',[ExampleController::class,'myFun']);
Route::get('/customurl/one/two',function()
{

})->name('app.custom');
Route::get('/',function()
{
    return route('app.custom');
});