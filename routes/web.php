<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuhtController;
use App\Http\Controllers\CustomerController;


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
Route::get('/', function(){
    return view('/welcome');

});

Route::get('/', [AuhtController::class, 'loginForm'])->name('login');
Route::post('/', [AuhtController::class, 'login']);
Route::get('/register', [AuhtController::class, 'registerForm']);
Route::post('/register', [AuhtController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuhtController::class, 'verification']);
Route::get('/logout', [AuhtController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('/dashboard');

})->middleware('auth');

Route::group(['middleware'=>'auth'], function(){
Route::get('/index', [CustomerController::class, 'index']);
Route::get('/edit/{customer}', [CustomerController::class, 'edit']);
Route::get('/delete/{customer}', [CustomerController::class, 'destroy']);
});




