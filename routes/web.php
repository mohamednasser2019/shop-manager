<?php


//main Rote
// Route::get('/','HomeController@index');
// Route::get('read_more/{id}/{text}','HomeController@readMore');

Route::group(['prefix' => 'admin'], function ()
{
    Auth::routes();

}

);








