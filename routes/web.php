<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});
Route::get('/progressive-web-app-development-training', function () {
    return view('progressive-web-app-development-training');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/web-app-certification-course', function () {
    return view('web-app-certification-course');
});
Route::get('/aboutus-suryaittech', function () {
    return view('aboutus-suryaittech');
});
Route::get('/careers', function () {
    return view('careers');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/students', function () {
    return view('students');
});

Route::get('/contact-suryaittech', function () {
    return view('contact-suryaittech');
});
Route::get('/html5-css3-javascript-training', function () {
    return view('html5-css3-javascript-training');
});

Route::get('/mobile-application-development', function () {
    return view('mobile-application-development');
});


Route::get('/responsive-web-design-bootstrap-training', function () {
    return view('responsive-web-design-bootstrap-training');
});

Route::get('/ui-designing-training', function () {
    return view('ui-designing-training');
});
Route::get('/web-application-development-training', function () {
    return view('web-application-development-training');
});
Route::get('/web-application-development', function () {
    return view('web-application-development');
});
Route::get('/surya-ittech-online-training', function () {
    return view('surya-ittech-online-training');
});
Route::get('/web-techies-solutions', function () {
    return view('web-techies-solutions');
});






















