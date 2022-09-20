<?php

use App\Models\Comic;
use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@index")->name("guest.home");

Route::get('/comics', "ComicController@index")->name("comics.index");

Route::get("/comics/create", "ComicController@create")->name("comics.create");

Route::get("/comics/{comic}", "ComicController@show")->name("comics.show");

Route::post("/comics", "ComicController@store")->name("comics.store");
