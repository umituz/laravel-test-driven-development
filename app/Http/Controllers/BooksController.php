<?php

namespace App\Http\Controllers;

use App\Book;

/**
 * Class BooksController
 * @package App\Http\Controllers
 */
class BooksController extends Controller
{

    /**
     * @return string
     */
    public function store()
    {
        Book::create($this->validateRequest());

        return 'created';
    }

    /**
     * @param Book $book
     * @return string
     */
    public function update(Book $book)
    {
        $book->update($this->validateRequest());

        return 'updated';

    }

    /**
     * @return mixed
     */
    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required'
        ]);
    }
}
