<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getAllAuthors()
    {
        return $this->callAPI('GET', 'https://bibliapp.herokuapp.com/api/authors');
    }

}
