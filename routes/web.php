<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'authors',
    'uses' => 'AuthorController@getAllAuthors'
]);

// Author
$router->get('/authors/{page}', [
    'as' => 'authors',
    'uses' => 'AuthorController@getAllAuthors'
]);
$router->get('/addauthor', function () use ($router) {
    return view('author.add');
});

$router->get('/editauthor/{id}', [
    'as' => 'authors',
    'uses' => 'AuthorController@editAuthor'
]);

$router->get('/deleteauthor/{id}', [
    'as' => 'authors',
    'uses' => 'AuthorController@deleteAuthor'
]);

$router->post('/saveauthor', [
    'as' => 'authors',
    'uses' => 'AuthorController@save'
]);

// Books
$router->get('/books', [
    'as' => 'books',
    'uses' => 'BookController@getAllBooks'
]);

$router->get('/addbook/{authorid}', function ($authorid) use ($router) {
    return view('book.add', ['authorid' => $authorid ]);
});

$router->get('/editbook/{id}', [
    'as' => 'books',
    'uses' => 'BookController@editBook'
]);

$router->get('/deletebook/{id}', [
    'as' => 'books',
    'uses' => 'BookController@deleteBook'
]);

$router->post('/savebook', [
    'as' => 'books',
    'uses' => 'BookController@save'
]);
