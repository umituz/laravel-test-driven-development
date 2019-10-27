<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Book
 * @package App
 */
class Book extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * Redirect path for a book
     * @return string
     */
    public function path()
    {
        return '/books/' . $this->id;
    }
}
