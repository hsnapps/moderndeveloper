<?php
use App\Code\Tools;

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
    $result = Tools::CallAPI(env('WP_BLOGS'));
    $blogs = json_decode($result);
    $last = collect($blogs)->last();

    return view('index', [
        'blogs' => $blogs,
        'last' => $last,
    ]);
});

Route::get('/start', function () {
    return view('single');
});

Route::get('/services/{service}', function($service) {
    return view('services');
})->name('services');
