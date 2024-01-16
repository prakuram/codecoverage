<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PostController;

class PostControllerTest extends TestCase
{
    const POST_RESPONSE = [
            'userId'  => 1,
            'id' => 1,
            'title' => "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
            'body' => "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
    ];
    /**
     * A basic test example.
     */
    public function test_getPost()
    {
        $controller = new PostController();
        $response = $controller->getPosts();
        $this->assertEquals($response->json(), (self::POST_RESPONSE));
        $this->assertEquals(200, $response->status());
    }
}


// 46acf080-9d26-428d-85cf-bd5cdf5025b3

// - name: Upload coverage reports to Codecov
//   uses: codecov/codecov-action@v3
//   env:
//     CODECOV_TOKEN: ${{ secrets.CODECOV_TOKEN }}
//run: vendor/bin/phpunit --coverage-clover coverage.xml
// modified the file