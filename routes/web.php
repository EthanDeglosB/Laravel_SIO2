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

Route::get('/Ores/create', function(){
    return view('create');
});

Route::post('/Ores', function (){
    $current_ore = new \App\Models\Ore();
    $current_ore->label = request('label');
    $current_ore->price = request('price');
    $current_ore->desc = request('desc');
    $current_ore->image_path = request('image_path');
    $current_ore->date_ = request('date_');
    $current_ore->save();
   return redirect('/Ores/'.$current_ore->id);
});


Route::get('/Ores/{id}',function($id){
    $specific_ore = \App\Models\Ore::find($id);
    return view('show', compact('specific_ore'));
});

Route::get('Ores/{i}/edit', function ($id){
    $specific_ore = \App\Models\Ore::find($id);
    return view('edit', compact('specific_ore'));
});

