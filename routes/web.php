<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;    
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
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

Route::get('/home', function (){
    return view('home');
});

route::get('/san-pham', function (){
    return view('product');
});
// chạy usercontroller
//Route::get('/goicontroller', [UserController::class, 'xinchao']);
Route::get('/goicontroller', [UserController::class, 'xinchao']);

Route::resource('photos', PhotoController::class);

route::prefix('/my')-> group(function(){

});

// route::resource('/my',MyController::class,'index');
// route::resource('/my/create',MyController::class,'create');
// route::resource('/my/{id}',MyController::class,'show');
// route::resource('/my/{id}/edit',MyController::class,'edit');

Route::resource('my', MyController::class);

// route dành cho HomeController
Route::get('/home2', [HomeController::class, 'index']);

//cách 1 đến trực tiếp view trong blade
Route::get('/PNV',function(){
    return view('home',['name'=> 'PNV25']);
})->name('home');
//cách 2 dùng controller
Route::get('/PNV1',[HomeController::class,'displayname']);

//hiển thị biên dịch mẫ HTML bằng {{!!}}
// cách 1 
Route::get('/PNV2',function(){
    return view('home',['name'=> '<i> <span style="color:green"> LÊ VĂN THẢO </span><i>']);
})->name('home');

//cách 2 dùng {!!!!} với controller
Route::get('/PNV4', [HomeController::class,'displayname']);

// vòng lặp for 
Route::get('/loopfor',[HomeController::class,'forloop']);

//include trong laravel
Route::get('/in',function(){
    return view('home',['title'=> 'Toidicode.com','alertMessage'=>'thongbaoday']);
})->name('home');

// Lặp include
Route::get('/inloop',function(){
    $posts = [
        ['name'=> 'post1'],
        ['name'=> 'post2'],
        ['name'=> 'post3'],
        ['name'=> 'post4'],
    ];
    return view('home',compact('posts'));
})->name('home');

//bài tập view trong blade
Route::get('/view1', function () {
    return view('tasks');
});

// Route::get('/view1', function () {
//     return view('happy');
// });