@extends('layouts.main')

@section('content')

    @foreach($news as $oneNews)
        <div><a href="{{route('news.show', $oneNews->id)}}">{{$oneNews->title}}. {{$oneNews->news_body}}</a></div>
    @endforeach

    <div><a href="{{route('news.create')}}" class="btn btn-primary mb-3">Create</a></div>

@endsection
