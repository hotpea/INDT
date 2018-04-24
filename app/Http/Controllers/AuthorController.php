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
        return View::make('author/list')->with(['authors' => $this->callAPI('GET', '/authors')]);
    }

}
