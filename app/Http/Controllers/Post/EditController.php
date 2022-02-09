<?php

namespace App\Http\Controllers\Post;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}

