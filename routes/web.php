<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $username = 'Paul';

/*    return view('home',[
        'name' => $username,
        ]);*/
    return view('home',compact('username'));
});

Route::get('/Ores', function(){
    $all_ores = \App\Models\Ore::all();
    return view('index', compact('all_ores'));
});
/*
Route::get('/Ores/',function(){
    $specific_ore = \App\Models\Ore::find($id);
});
*/
