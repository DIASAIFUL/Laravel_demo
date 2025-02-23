<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/about', function () {
    return view('about');
}) ->name('about');

Route::get('/service/{service_id}/{service_name}/{service_title?}', function ($service_id, $service_name,$service_title = null) {
    return "service".''.$service_id.''.$service_name.''.$service_title; 
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
   




