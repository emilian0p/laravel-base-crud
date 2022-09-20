<?php

use App\Models\Comic;
use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@index")->name("guest.home");

Route::get('/admin', 'ComicController@index')->name('admin.index');

Route::get('/comics/{comic}', 'ComicController@show')->name('comic.show');
