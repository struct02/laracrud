<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){

return view('about', ["greetings"=>"Good morning"]);

});


Route::get('/team', function(){

return view('ourteam.index');

});


// Route::get('/create', function(){

// return view('ourteam.create');

// });

Route::get('/create', [ProductsController::class, 'addProduct']);

// 
Route::post('/create-post', [ProductsController::class, 'createProduct'])->name('post.create');

