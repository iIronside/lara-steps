<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title_body' => 'string',
        ]);

        Tag::create($data);
        return redirect()->route('tags.index');
    }

    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Tag $tag)
    {
        $data = request()->validate([
            'title_body' => 'string',
        ]);
        $tag->update($data);
        return redirect()->route('tags.index');
    }
}
