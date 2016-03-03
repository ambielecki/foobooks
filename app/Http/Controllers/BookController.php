<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller {

    /**
     * Responds to requests to GET /books
     */
    public function getIndex() {
        return 'List all the books';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($id) {
        return 'Show book: '.$id;
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        $view = '<form method="post" action="/book/create">';
        $view.= csrf_field();
        $view.='<label>Book title: <input type="text" name="title"></label>';
        $view.='<input type="submit">';
        $view .='</form>';
        return $view;
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Process adding new book';
    }

    public function getTest(){
        echo config('app.url');
    }
} // end of class