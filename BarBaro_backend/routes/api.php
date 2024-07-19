<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;
use LaravelJsonApi\Laravel\Routing\ResourceRegistrar;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function (ResourceRegistrar $server) {
    $server->resource('appointments', JsonApiController::class)
        ->relationships(function ($relations) {
            $relations->hasOne('user');
            $relations->hasOne('worker');
            $relations->hasMany('services');
        });

    $server->resource('services', JsonApiController::class)
        ->relationships(function ($relations) {
            $relations->hasMany('appointments');
        });

    $server->resource('workers', JsonApiController::class)
        ->relationships(function ($relations) {
            $relations->hasMany('appointments');
        });

    $server->resource('users', JsonApiController::class)
        ->relationships(function ($relations) {
            $relations->hasOne('worker');
        });
});

