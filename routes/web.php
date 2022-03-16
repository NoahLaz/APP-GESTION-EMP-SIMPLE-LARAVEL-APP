<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('employees', EmployeesController::class);

    Route::get('employees/{id}/vacation', [EmployeesController::class, 'vacationRequest'])->name('vacation.request');

    Route::get('employees/{id}/certificate', [EmployeesController::class, 'certificateRequest'])->name('certificate.request');

});
