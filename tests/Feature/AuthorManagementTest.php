<?php

namespace Tests\Feature;

use App\Author;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_author_can_be_created()
    {
//        $this->withoutExceptionHandling();

        $this->post('author', [
            'name' => 'Ümit UZ',
            'birthday' => '04/14/1988'
        ]);

        $author = Author::all();

        $this->assertCount(1, $author);

        $this->assertInstanceOf(Carbon::class, $author->first()->birthday);

        $this->assertEquals('1988/14/04', $author->first()->birthday->format('Y/d/m'));
    }

}
