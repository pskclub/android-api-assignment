<?php

use Illuminate\Http\Request;

Route::get('/products', 'ProductController@lists');
Route::get('/products/{id}', 'ProductController@byId');


