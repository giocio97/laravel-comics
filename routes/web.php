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
    $arrComics = config('comics');
    $arrLinks = config('linkscomic');
    $arrNav = config('navlink');
    return view('home', [
        'arrComics' => $arrComics,
        'arrLinks' => $arrLinks,
        'arrNav' => $arrNav,

    ]);
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $arrNav = config('navlink');
    $arrLinks = config('linkscomic');
    $comic = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id){
            $comic = $value;
            break;
        }
    }

    if ($comic) {
        return view('comic', [
            'arrNav' => $arrNav,
            'arrLinks' => $arrLinks,
            'comic' => $comic,
        ]);
    } else {
        abort(404);
    }

})->name('comic');

