<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']); 

Route::prefix('/task')->group (function(){
    Route::post('/save',[HomeController::class,'save'])->name('task.save'); 
    Route::get('/{task_id}/delete',[HomeController::class,'delete'])->name('task.delete'); 

});
