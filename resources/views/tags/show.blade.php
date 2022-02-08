@extends('layouts.main')

@section('content')


        <div>{{$tag->id}}. {{$tag->title_body}}</div>


        <div><a href="{{route('tags.index')}}">Back</a></div>
        <div><a class="btn btn-primary" href="{{route('tags.edit', $tag->id)}}">Update</a></div>
        <div>
            <form   action="{{route('tags.destroy', $tag->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger" >

        </form>


@endsection
