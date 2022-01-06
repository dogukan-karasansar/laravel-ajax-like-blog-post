<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\MainController;

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

 Route::get('/',[MainController::class,'index'])->name('index');
 Route::get('/blogs/yazilim',[MainController::class,'dev'])->name('categories.dev');
 Route::get('/blogs/yasam',[MainController::class,'life'])->name('categories.life');
 Route::get('/blogs/spor',[MainController::class,'sports'])->name('categories.sports');
 Route::get('/blogs/muzik',[MainController::class,'music'])->name('categories.music');
 Route::get('blogs/{category}/{slug}',[MainController::class,'resume'])->name('resume');
 Route::get('/about',function(){
     return view('cv');
 })->name('about');


Route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin'],function(){
    Route::get('blogs/{id}',[BlogController::class,'destroy'])->whereNumber('id')->name('blogs.destroy');
    Route::get('',[MainController::class,'dashboard'])->name('dashboard');
    Route::resource('blogs', BlogController::class);
});