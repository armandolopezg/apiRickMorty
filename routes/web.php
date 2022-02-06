<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apirick;


Route::get('/', [apirick::class,'personajes'])->name('inicio');
Route::get('post/{id}', [apirick::class,'individual'])->name('post');