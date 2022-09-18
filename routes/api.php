<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\StepladderController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tool')
	->controller(ToolController::class)
	->group(function() {

    	Route::get('/{tool}', 'index')->name('tool');
	Route::get('/{tool}/change_status/{status}', 'changeStatus');
});

Route::controller(StepladderController::class)->group(function() {
	Route::get('/stepladder/{stepladder}/step/{step}', 'stepOnStepladder')
		->scopeBindings();
	Route::get('/stepladder', 'index');
});
