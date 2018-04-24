<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/deneme','HomeController@get_deneme');

Route::get('/form','HomeController@get_form');

Route::post('/form','HomeController@post_form');

Route::get('/haberler','HomeController@get_haberler');

Route::post('/haberler','HomeController@post_haberler');

//Route::get('/deneme/{isim}','HomeController@get_deneme_isim'); bunu kaldirdik çünkü; kodların yukarıdan calismaya baslayica bi alttaki kodu okumucak


Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    Route::get('/forum','HomeController@get_deneme');
    Route::get('/blog','HomeController@get_deneme');
    Route::group(['prefix'=>'haber','middleware'=>'yazar'],function(){
        Route::get('/haber-ekle','HomeController@get_deneme');
        Route::get('/haberler','HomeController@get_deneme');
    });

    Route::get('/galari','HomeController@get_deneme');
});

Route::get('/deneme/{forum}/{php}/{fremawork}/sorular','HomeController@get_katagori');
