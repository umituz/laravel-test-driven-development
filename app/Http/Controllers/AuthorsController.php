<?php

namespace App\Http\Controllers;

use App\Author;

/**
 * Class AuthorsController
 * @package App\Http\Controllers
 */
class AuthorsController extends Controller
{
    public function store()
    {
        Author::create(request()->only('name', 'birthday'));
    }
}
