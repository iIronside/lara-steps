@extends('layouts.main')

@section('content')

    <form action="{{route('tags.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title_body">Title</label>
            <input type="text" name="title_body" class="form-control" id="title_body" placeholder="Title body">
        </div>
       <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

@endsection
