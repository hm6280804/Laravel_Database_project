<?php

use App\Http\Controllers\emplyeeController;
use App\Http\Controllers\farmerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\stulectController;
use Illuminate\Support\Facades\Route;


// function getUsers(){
//     return  [
//         1 => ['name' => 'Muhammad Hanif', 'phone' => '123456', 'city' => 'Takht bhai'],
//         2 => ['name' => 'Asad ullah', 'phone' => '123456', 'city' => 'Ghulamo'],
//         3 => ['name' => 'Hilal Akhtar', 'phone' => '123456', 'city' => 'Katlang']
//     ];
// }

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [emplyeeController::class, 'showUser'])->name("home");

Route::get('/user/{id}', [emplyeeController::class, 'singleUser'])->name('view.user');

Route::post('/add', [emplyeeController::class, 'addUser'])->name('addUser');

Route::post('/update/{id}', [emplyeeController::class, 'updateUser'])->name('update.user');

Route::get('/deluser/{id}', [emplyeeController::class, 'deleteUser']);

Route::view('/newuser', 'addUser');

Route::get('/updatepage/{id}', [emplyeeController::class, 'updatePage'])->name('update.page');




// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/post', function(){
//     return view('post');
// });


// Route::get('/test',function(){
//     return view('test');
// });

// Route::get('/users',function(){
//     $names = getUsers();
//     return view('userpage', ['user' => $names]);
// });


// Route::get('/user/{id}',function($id){
//     $names = getUsers();
//     abort_if(!isset($names[$id]),404);
//     $n = $names[$id];
//     return view('user', ['n'=>$n]);
// })->name('view.user');


// Route::get('/cont/{id}', [PageController::class, 'showUser']);





Route::get('/join', [farmerController::class, 'showFarmers']);

Route::get('/union', [stulectController::class, 'stuLect']);

Route::get('/when', [stulectController::class, 'whenData']);

Route::get('/chunk', [stulectController::class, 'chunkData']);






























// Route::get('/check', function(){
//     return "<h1>this is checking route</h1>";
// });


// Route::get('/newFile/{id?}/newId/{newid?}',function(string $val = null, string $secVal = null){
//     if($val){
//         return "<h1>your entered id is : ".$val."</h1><h2> new id is : ".$secVal."</h2>";
//     }
//     else{
//         return "<h1>you entered empty id is null</h1>";
//     }
    
// });

// Route::view('/justcheck','newFile');

// Route::get('/changed',function(){
//     return view('firstPost');
// });

// Route::redirect('/post/firstpost','/changed', 301);


//whereNumber('id)

// Route::get('/test/{id}',function(string $val){
//     return "<h3>your entered id is : ".$val."</h3>";
// })->where('id', '[a-zA-Z]+');
//->whereIn('id',['movie', 'song', 'painting']);
// ->whereAlphaNumeric('id');
// ->whereAlpha('id');
// ->whereNumber('id');jjj





//Named routes
// Route::get('/testing',function(){
//     return "<h3>this is just testing route html</h3>";
// })->name('tests');




// Route::prefix('pages')->group(function(){

//     Route::get('/about1', function(){
//         return "<h3>this is about1 page</h3>";
//     });

//     Route::get('/about2', function(){
//         return "<h3>this is about2 page</h3>";
//     });

//     Route::get('/about3', function(){
//         return "<h3>this is about3 page</h3>";
//     });
// });

// Route::fallback(function(){
//     return "<h3>Page not found</h3>";
// });

// Route::fallback(function(){
//     return "<div class='container'><div class='alert alert-danger'><h3>Page not found</h3></div></div>";
// });

