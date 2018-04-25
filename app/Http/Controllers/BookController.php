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
        $id = $request->input('id');
        $title = $request->input('titulo');
        $authorId = $request->input('autorid');

        $data = array(
            "title" => $title,
            "authorId" => $authorId
        );


        if($id) {
            $this->callAPI('PUT',
                '/books/' . $id,
                $data
            );
        } else {
            $this->callAPI('POST',
                '/books/',
                $data
            );
        }

        return redirect('/');
    }

    public function editBook($id)
    {
        $book = $this->callAPI('GET', '/books/' . $id);

        return View::make('book/edit')->with(
            [
                'book' => $book
            ]
        );
    }

    public function deleteBook($id)
    {
        $this->callAPI('DELETE', '/books/' . $id);

        return redirect('/');
    }

}
