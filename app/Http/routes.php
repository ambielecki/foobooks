<?php

Route::group(['middleware' => ['web']], function() {
    //Week 5

    /* Before moving logic to controller
    Route::get('/', function () {
        //return view('welcome');
        return 'Hello, welcome to my Laravel App';
    });

    Route::get('/book/create', function(){
        $view = '<form method="post" action="/book/create">';
        $view.= csrf_field();
        $view.='Book title: <input type="text" name="title">';
        $view.='<input type="submit">';
        $view .='</form>';
        return $view;
    });

    Route::post('book/create', function(){
        return 'Add the book '.$_POST['title'];
    });

    Route::get('/books', function () {
        //return view('welcome');
        return 'Here is a list of books';
    });

    Route::get('/book/{title}', function ($title) {
        //return view('welcome');
        return 'Here is your book '.$title;
    });
    */

    /*Moving route logic to controller*/


    Route::get('/books', 'BookController@getIndex');

    Route::get('/book/create', 'BookController@getCreate');
    Route::post('/book/create', 'BookController@postCreate');

    Route::get('/book/{title?}','BookController@getShow');

    Route::get('/test', 'BookController@getTest');

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});
