<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class AuthorController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getAllAuthors()
    {
        $result = json_decode($this->callAPI('GET', 'https://bibliapp.herokuapp.com/api/authors'), TRUE);
        return View::make('author/list')->with(['authors' => $result]);
    }

}
