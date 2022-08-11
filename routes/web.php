<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskListController;

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
    return redirect()->route('tasks.index');
});
Route::get('/tasks-list', [TaskListController::class, 'index'])->name('tasks.index');
Route::post('/tasks-store', [TaskListController::class, 'store'])->name('tasks.store');
Route::post('/tasks-update', [TaskListController::class, 'update'])->name('tasks.update');
