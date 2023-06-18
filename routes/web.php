<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Form2Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PDF2Controller;


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

/** set active side bar */
function set_active($route) {
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}


Route::get('/', function () {
    return view('Pengguna.login');
})->name('/');
Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister'])->name('simpanregister');
// ----------------------------- login ------------------------------//
Route::prefix('auth')->group(function () {
    Route::post('/', [LoginController::class, 'postlogin'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ----------------------------- main dashboard ------------------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('dashboard/page', 'index')->name('dashboard/page');
    Route::get('form/input', 'index')->name('form/input');
});

// -------------------------------- form ------------------------------------//
Route::controller(FormController::class)->group(function () {
    Route::get('form/input/page', 'formIndex')->name('form/input/page');
    Route::post('form/input/save', 'formSaveRecord')->name('form/input/save');
    Route::get('form/page/view', 'formView')->name('form/page/view');
    Route::get('form/input/edit/{id}', 'formInputEdit');
    Route::post('form/input/update', 'formUpdateRecord')->name('form/input/update');
    Route::post('form/input/delete', 'formDelete')->name('form/input/delete');

   
});

Route::controller(Form2Controller::class)->group(function () {
    Route::get('form/input2/page', 'formIndex')->name('form/input2/page');
    Route::post('form/input2/save', 'formSaveRecord')->name('form/input2/save');
    Route::get('form/page2/view', 'formView')->name('form/page2/view');
    Route::get('form/input2/edit/{id}', 'formInputEdit');
    Route::post('form/input2/update', 'formUpdateRecord')->name('form/input2/update');
    Route::post('form/input2/delete', 'formDelete')->name('form/input2/delete');
});    

Route::group(['middleware' => ['auth']], function() {
    Route::post('/dashboard/page', 'HomeController@index');

});


Route::get('/export-pdf/{id}', 'PDFController@exportPDF')->name('export-pdf');
Route::get('/export2-pdf/{id}', 'PDF2Controller@exportPDF')->name('export2-pdf');

Route::get('/search', 'SearchController@search')->name('search');
Route::get('/search2', 'Search2Controller@search2')->name('search2');


