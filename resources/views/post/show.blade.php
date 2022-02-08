@extends('layouts.main')

@section('content')


        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>f
        <div>{{$post->image}}</div>


        <div><a href="{{route('post.index')}}">Back</a></div>
        <div><a class="btn btn-primary" href="{{route('post.edit', $post->id)}}">Update</a></div>
        <div>
            <form   action="{{route('post.destroy', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger" >

        </form>


@endsection
