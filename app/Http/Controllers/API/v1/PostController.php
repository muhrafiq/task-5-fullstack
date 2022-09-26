<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return new PostResource(true, 'List Data Post', $posts);
    }

    public function show(Post $post)
    {
        return new PostResource(true, 'Data Post Ditemukan!', $post);
    }
}
