@extends('layouts.main')

@section('content')


        <div>{{$news->id}}. {{$news->title}}</div>
        <div>{{$news->news_body}}</div>


        <div><a href="{{route('news.index')}}">Back</a></div>
        <div><a class="btn btn-primary" href="{{route('news.edit', $news->id)}}">Update</a></div>
        <div>
            <form   action="{{route('news.destroy', $news->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger" >

        </form>


@endsection
