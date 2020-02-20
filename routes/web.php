<?php


//main Rote
// Route::get('/','HomeController@index');
// Route::get('read_more/{id}/{text}','HomeController@readMore');

Route::group(['prefix' => 'admin'], function ()
{
    Auth::routes();

    Route::get('home', 'Admin\HomeController@home');

    Route::resource('product', 'Admin\productsController');
    // Route::post('company_Bill', 'Admin\productsController@insertcompany_Bill');

}



);

Route::resource('company_Bill', 'Admin\productsController');








