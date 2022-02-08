@extends('layouts.main')

@section('content')

    <form action="{{route('news.update', $news)}}"  method="post">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ $news->title }}">
        </div>
        <div class="form-group">
            <label for="news_body">News body</label>
            <textarea class="form-control" name="news_body" id="content" placeholder="News body">{{ $news->news_body }}</textarea>
        </div>

        <div class="form-group">
            <label for="categories">Example select</label>
            <select class="form-control" id="categories" name="category_id">
                @foreach($categories as $category)
                    <option {{$news->category_id == $category->id ? ' selected': ''}}

                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>



       <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

@endsection
