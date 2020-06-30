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
    'addresses' => 'AddressController', // to do
    'badges' => 'BadgeController', // to do
    'bikes' => 'BikeController', // to do
    'brands' => 'BrandController', // to do
    'clients' => 'ClientController', // to do
    'compagnies' => 'CompagnyController', // to do
    'countries' => 'CountryController', // to do
    'cities' => 'CityController', // to do
    'editions' => 'EditionController', // to do
    'exponents' => 'ExponentController', // to do
    'feedbacks' => 'FeedbackController', // to do
    'happenings' => 'HappeningController', // to do
    'pepole' => 'MemberController', // to do
    'products' => 'ProductController', // test silver boulet
    'questions' => 'QuestionController', // to do
    'staffs' => 'StaffController', // to do
    'tests' => 'TestController', // to do
    'testdays' => 'TestdayController', // to do


]);
