<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function (){return redirect()->route('posts.index');});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);