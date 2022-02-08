@extends('layouts.main')

@section('content')

    <form action="{{route('tags.update', $tag)}}"  method="post">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="title_body">News body</label>
            <textarea class="form-control" name="title_body" id="title_body" placeholder="title_body">{{ $tag->title_body }}</textarea>
        </div>
       <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

@endsection
