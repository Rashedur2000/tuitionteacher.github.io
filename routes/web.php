<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.landingpage.land');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


route::get('/lands', function(){
    return view('website.landingpage.land');
})->name('one');

route::get('/users', function(){
    return view('website.userlogin.user');
})->name('two');

route::get('/hellouser', function(){
    return  view('website.userregister.register');
})->name('three');


route::get('/tutorregi', function(){
    return view('website.tutorreg.registration');
})->name('four');



route::get('/courses', function(){
    return view('website.course.course');
})->name('five');


route::get('/tabs', function(){
    return view('website.tutorreg.table');
})->name('six');


route::get('/starts', function(){
    return view('website.search.starter');
})->name('seven');

route::get('/ttwo', function(){
    return view('website.tutortwo.tutortwo');
})->name('eight');

route::get('/contacts', function(){
    return view('website.contact.contact');
})->name('nine');



// route::get('/tone', function(){
//     return view('website.tutorone.tutorone');
// })->name('seven');









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
