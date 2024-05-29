<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
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
    return view('welcome');
});


// การสร้าง Route
// Route::get('/about', function () {
//     echo "<h1>Hello</h1>";
// });

// Route::get("/user", function () {
//     echo "Hello Naihot";
//     echo "<br>";
//     echo "hello laravel 8";
// });

// Dynamic route
// Route::get("/user/{fname}/{lname}", function ($fname, $lname) {
//     echo "Hello : $fname";
//     echo "Hello : $lname";
//     echo "<br>";
//     echo "hello laravel 8";
// });

// การสร้าง Route View
Route::get('/member', [MemberController::class, 'index'])->name('member');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/admin', [AdminController::class,'index'])->name('admin');