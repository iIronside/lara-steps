@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('post.index')}}">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about.index')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('bio.index')}}">Bio</a>
                    </li>
                </ul>
        </nav>


    </div>
</div>

@endsection
