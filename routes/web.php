<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){

return view('about', ["greetings"=>"Good morning"]);

});


Route::get('/team', function(){

return view('ourteam.index');

});


Route::get('/create', function(){

return view('ourteam.create');

});


