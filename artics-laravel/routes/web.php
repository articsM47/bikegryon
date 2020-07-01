<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Acceuil');
});


Route::get('Acceuil', function () {
    return view("Acceuil");
});

Route::get('Login', function () {
    return view("Login");
});

Route::get('Logout', function () {
    return view("Logout");
});

Route::get('Event', function () {
    return view("Event");
});

Route::get('Inscriptions', function () {
    return view("Inscriptions");
});
/* Route::post('Inscriptions', 'InscriptionsController@valideEtTraiteFormulaire'); */

Route::get('Creation', function () {
    return view("Creation");
});

Route::get('Email', function () {
    return view("Email");
});

Route::get('Create', function () {
    return view("Create");
});

Route::get('Confirmation', function () {
    return view("Confirmation");
});

Route::get('Compte', function () {
    return view("Compte");
});

Route::get('Attente', function () {
    return view("Attente");
});
Route::get('Wishlist', function () {
    return view("Wishlist");
});

Route::get('Test', function () {
    return view("Test");
});

Route::get('Infos', function () {
    return view("Infos");
});

Route::get('Plan', function () {
    return view("Plan");
});

Route::get('Check-in', function () {
    return view("Check-in");
});


Route::resource('Products', 'ProductController', ['except'=>['show','edit','update']]);

Route::get('Catalogue', 'ProductController@affiche');




Route::get('Product/{product}', 'BikeController@afficheproduit');

Route::get('AddProduct', 'BikeController@create');

/* Route::get('import_data', 'ProductController@uploadFile'); */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
