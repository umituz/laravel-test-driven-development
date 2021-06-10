<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class AuthorsController
 * @package App\Http\Controllers
 */
class AuthorsController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * @return void
     */
    public function store()
    {
        Author::create($this->validateRequest());
    }

    /**
     * @return array
     */
    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'birthday' => 'required'
        ]);
    }
}
