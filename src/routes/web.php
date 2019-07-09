<?php

Route::get('/test/{name}')
    ->uses('Discuss\Awesome\Controllers\TestController@index');

/*    Route::get('contact', function(){
        return 'Hello from the contact form package';
    });*/


    Route::get('contact111', function(){
        return view('contactform::contact');
    });
    
/*        Route::group(['namespace' => 'Discuss\Contactform\Http\Controllers\Admin', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });*/