<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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

    public function save(Request $request)
    {
        $title = $request->input('titulo');
        $authorId = $request->input('autorid');

        $data = array(
            "title" => $title,
            "authorId" => $authorId
        );

        $this->callAPI('POST',
            '/books/',
            $data
        );

        return redirect('/authors/1');
    }

}
