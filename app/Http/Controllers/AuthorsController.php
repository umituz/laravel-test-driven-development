<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

/**
 * Class AuthorsController
 * @package App\Http\Controllers
 */
class AuthorsController extends Controller
{

    public function create()
    {
        return view('authors.create');
    }

    public function store()
    {
        Author::create($this->validateRequest());
    }

    /**
     * @return mixed
     */
    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'birthday' => 'required'
        ]);
    }
}
