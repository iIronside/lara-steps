@extends('layouts.main')

@section('content')

    <div><a href="{{route('tags.create')}}" class="btn btn-primary mb-3">Create</a></div>

    @foreach($tags as $tag)
        <div><a href="{{route('tags.show', $tag->id)}}">{{$tag->id}}. {{$tag->title_body}}</a></div>
    @endforeach



@endsection
