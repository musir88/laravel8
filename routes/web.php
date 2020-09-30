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
<<<<<<< HEAD
=======
    // return view('welcome');
	// header("Location:".action([App\Http\Controllers\Home\IndexController::class, 'geteich']));
>>>>>>> c4fc3a253256a3ca29684a724970af790bd99a08
	return redirect(action([App\Http\Controllers\Getrich\IndexController::class, 'index']));


});




Route::prefix('/getrich')->group(function () {
    Route::get('/io',  [App\Http\Controllers\Getrich\IndexController::class, 'index']);
});


<<<<<<< HEAD
Route::prefix('/api')->group(function () {
    Route::post('/clientNotice',  [App\Http\Controllers\ApiController::class, 'clientNotice']);
});
=======

>>>>>>> c4fc3a253256a3ca29684a724970af790bd99a08

