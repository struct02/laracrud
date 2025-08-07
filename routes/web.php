<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){

return view('about', ["greetings"=>"Good morning"]);

});


// Route::get('/index', function(){

// return view('ourteam.index');

// });







// Route::get('/create', function(){

// return view('ourteam.create');

// });



Route::middleware('auth')->group(function (){

Route::get('/create', [ProductsController::class, 'addProduct']);
Route::post('/create-post', [ProductsController::class, 'createProduct'])->name('post.create');
Route::get('/participant', [ParticipantController::class, 'addParticipant']);
Route::post('/create-participant', [ParticipantController::class, 'createParticipant'])->name('post.participant');
Route::get('/participants', [ParticipantController::class, 'viewParticipants']);
// dashboard routes
Route::get('/index', [ParticipantController::class, 'newUserview'])->name('maindashboard');

});

//Routes for Registration, Login and Authentication
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// logout request
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//End of route implementation for various pages as well as login and register pages, the Route:post register and Route:post login were not implemented at this point
// This is a boilerplate to spawn up simple route pages. No Authentication implemented at this point


//Complete login and registration implemented as well as all routes protected


//Forgot password view
Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');

Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail']);


Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->middleware('guest')->name('password.reset');



 
Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->middleware('guest')->name('password.update');
