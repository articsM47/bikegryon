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


Route::get('/artics/', function () {
    return view('Acceuil');
});

Route::get('Acceuil', function () {
    return view("Acceuil");
});

Route::get('login', function () {
    return view("Login");
});

Route::get('logout', function () {
    return view("Logout");
});

Route::get('register', function () {
    return view("Register");
});

Route::get('Event', function () {
    return view("Event");
});

Route::get('Inscriptions', 'MemberController@rendFormulaire');

Route::post('Creation', 'MemberController@valideEtTraiteFormulaire');

Route::post('Confirmation', 'MemberController@validetoConfirmation');

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

Route::post('upCompte', 'MemberController@submitcompte' );


Route::get('MesTests', function () {
    return view("MesTests");
});

Route::get('Wishlist', function () {
    return view("Wishlist");
});

Route::get('Test', function () {
    return view("Test");
});

Route::post('Test', 'TestController@create');
Route::post('Test/Review', 'TestController@submitReview');

Route::post('Member/Badge', 'MemberController@submitBadge');

Route::get('Infos', function () {
    return view("Infos");
});

Route::get('Plan', function () {
    return view("Plan");
});

Route::get('Check-in', function () {
    return view("Check-in");
});


Route::resource('Products', 'BikeController', ['except'=>['show','edit','update']]);

Route::get('Catalogue', 'BikeController@affiche');

Route::get('Cataloguerp', function () {
    return view("catalogue_representant");
});

Route::get('Product/{id}', 'BikeController@afficheproduit');

Route::get('AddProduct', 'BikeController@create');

Route::resource('Bikes', 'BikeController'/* , ['except'=>['show','edit','update']] */);

Route::post('importdata','BikeController@uploadFile');

Route::get('infophp', function() {
    phpinfo();
});

/* Route::get('import_data', 'ProductController@uploadFile'); */
/*
 Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home'); */
