<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function getPosts(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');
        return $response;
    }
}
