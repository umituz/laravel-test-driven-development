<?php

namespace App\Http\Controllers;

use Performance\Performance;

/**
 * Class UrlController
 * @package App\Http\Controllers
 */
class UrlController extends Controller
{
    public function home()
    {
        Performance::point();
        Performance::results();
        return view('welcome');
    }
}
