<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Users', function () {
   return view('Users',$Users=['type'=>'IRAGUHA' ,'age'=>'Davis','address'=>"Nyamata"]);
   //return "Iraguha likes laravel";
   //lets return json file
   //return ["name"=>"Iraguha","age"=>19];
});
