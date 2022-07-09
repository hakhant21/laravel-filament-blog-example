<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $categories = Category::with('posts')->get();
    return view('welcome', compact('categories'));
});
