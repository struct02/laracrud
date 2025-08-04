<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\AuthController;

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


Route::get('/participant', [ParticipantController::class, 'addParticipant']);

Route::post('/create-participant', [ParticipantController::class, 'createParticipant'])->name('post.participant');

Route::get('/participants', [ParticipantController::class, 'viewParticipants']);


//Routes for Registration, Login and Authentication
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

//End of route implementation for various pages as well as login and register pages, the Route:post register and Route:post login were not implemented at this point
// This is a boilerplate to spawn up simple route pages. No Authentication implemented at this point
