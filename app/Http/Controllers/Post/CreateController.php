<?php

namespace App\Http\Controllers\Post;

use App\Models\Categorie;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }
}

