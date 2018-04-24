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

$router->get('/', function () use ($router) {
    return view('index', ['name' => 'Jack']);
});

$router->get('/authors', [
    'as' => 'authors',
    'uses' => 'AuthorController@getAllAuthors'
]);

$router->get('/authors/{page}', [
    'as' => 'authors',
    'uses' => 'AuthorController@getAllAuthors'
]);

$router->get('/add-author', function () use ($router) {
    return view('author.add');
});

$router->get('/books', [
    'as' => 'books',
    'uses' => 'BookController@getAllBooks'
]);