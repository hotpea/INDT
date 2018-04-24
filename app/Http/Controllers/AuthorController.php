<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class AuthorController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getAllAuthors($page = null)
    {
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $resultFiltered = $this->callAPI('GET', "/authors?filter=%7B%22offset%22%3A%20$offset%2C%20%22limit%22%3A%20$limit%7D");
        $resultTotal = $this->callAPI('GET', '/authors');

        // TODO: passar isso para o controller de books
        foreach($resultFiltered as $k => $filtered) {
            $resultFiltered[$k]['books'] = $this->callAPI('GET', '/authors/' . $filtered['id'] . '/books');
        }

        return View::make('author/list')->with(
            [
                'authors' => $resultFiltered,
                'count' => count($resultTotal),
                'pages' => ceil(count($resultTotal) / 5),
                'actual_page' => $page
            ]
        );
    }

}
