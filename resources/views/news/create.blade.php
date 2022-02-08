@extends('layouts.main')

@section('content')

    <form action="{{route('news.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="news_body">News body</label>
            <textarea class="form-control" name="news_body" id="news_body" placeholder="News body"></textarea>
        </div>

        <div class="form-group">
            <label for="categories">Example select</label>
            <select class="form-control" id="categories" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

       <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

@endsection
