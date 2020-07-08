<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    //'addresses' => 'AddressController',
    //'badges' => 'BadgeController',
    'bikes' => 'BikeController',
    //'brands' => 'BrandController',
    //'clients' => 'ClientController',
    //'compagnies' => 'CompagnyController',
    //'countries' => 'CountryController',
    //'cities' => 'CityController',
    //'editions' => 'EditionController',
    //'exponents' => 'ExponentController',
    //'feedbacks' => 'FeedbackController',
    //'happenings' => 'HappeningController',
    'people' => 'MemberController',
    //'products' => 'ProductController',
    //'questions' => 'QuestionController',
    //'staffs' => 'StaffController',
    'tests' => 'TestController',
    //'testdays' => 'TestdayController',
]);
