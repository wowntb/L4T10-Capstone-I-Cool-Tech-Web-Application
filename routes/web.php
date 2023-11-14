<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // This gets the entire table and orders it in descending order of creation_date.
    $articles = DB::table('articles')->orderBy('creation_date', 'desc')->get();
    return view('home', ['articles' => $articles]);
});

Route::get('/home', function () {
    $articles = DB::table('articles')->orderBy('creation_date', 'desc')->get();
    return view('home', ['articles' => $articles]);
});

Route::get('/article/{id}', function ($id) {
    // This query results in a table with 1 row where the id = $id.
    $article = DB::table('articles')->where('id', '=', $id)->get();
    return view('article', ['article' => $article]);
});

Route::get('/tag/{tag_name}', function () {
    $articles = DB::table('articles')->get();
    return view('tag', ['articles' => $articles]);
});

Route::get('/category/{slug}', function () {
    $articles = DB::table('articles')->get();
    return view('category', ['articles' => $articles]);
});

Route::get('/legal/{subsection}', function ($subsection) {
    return view('legal', ['subsection' => $subsection]);
});

Route::get('/search', function () {
    $articles = DB::table('articles')->get();
    return view('search', ['articles' => $articles]);
});
