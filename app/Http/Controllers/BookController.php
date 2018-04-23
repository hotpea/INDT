<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getAllBooks()
    {
        return $this->callAPI('GET', 'https://bibliapp.herokuapp.com/api/Books');
    }

}
