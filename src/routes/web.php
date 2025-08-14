<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

route::middleware('auth')->group(function () {
    route::get('/', [ContactController::class, 'index']);
});
// route::get('/index', [ContactController::class, 'index']);

route::post('/confirm', [ContactController::class, 'confirm']);
route::post('/back', [ContactController::class, 'back']);
route::post('/store', [ContactController::class, 'store']);
route::get('/thanks', [ContactController::class, 'thanks']);
route::get('/admin', [ContactController::class, 'admin']);
route::get('/search', [ContactController::class, 'search']);
route::get('modal', [ContactController::class, 'modal']);
