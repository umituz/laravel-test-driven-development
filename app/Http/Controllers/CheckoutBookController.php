<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

/**
 * Class CheckoutBookController
 * @package App\Http\Controllers
 */
class CheckoutBookController extends Controller
{
    /**
     * CheckoutBookController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Book $book
     */
    public function store(Book $book)
    {
        $book->checkout(auth()->user());
    }
}
