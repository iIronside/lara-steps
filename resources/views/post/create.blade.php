@extends('layouts.main')

@section('content')

    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image">
        </div>

        <div class="form-group">
            <label for="categories">Example select</label>
            <select class="form-control" id="categories" name="categories_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tags">tags multiple</label>
            <select multiple class="form-control" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title_body}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

@endsection
