<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home'); // this should match home.blade.php
});



// Homepage Route
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page Route (if you create it)
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page Route (optional)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// More demo pages (if needed)
Route::get('/demo/{page}', function ($page) {
    return view('demos.' . $page);
})->name('demo');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-single', function () {
    return view('pages.blog-single');
})->name('blog.single');

Route::get('/categories', function () {
    return view('pages.categories');
})->name('categories');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::fallback(function () {
    return view('pages.error');
});
