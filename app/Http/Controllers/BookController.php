<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Rych\Random\Random;
use Faker\Factory;

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
    public function getShow($title = null) {
        /*return 'Show book: '.$title;*/
        /*return view('books.show')->with('title',$title);*/
        return view('books.show', ['title'=>$title]);
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {

        $view = '<form method="post">';
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

        $data = Factory::create();
        $address = $data->address;
        $phone = $data->phoneNumber;
        echo $address;
    }

} // end of class