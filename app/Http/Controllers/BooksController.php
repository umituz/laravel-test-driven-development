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
        $book = Book::create($this->validateRequest());

        return redirect($book->path());
    }

    /**
     * @param Book $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Book $book)
    {
        $book->update($this->validateRequest());

        return redirect($book->path());
    }

    /**
     * @param Book $book
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');

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
