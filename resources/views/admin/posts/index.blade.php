@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row justift-content-between">
        @foreach ($posts as $post)

        <div class="card p-0 m-5" style="width: 18rem">
            <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <a href="{{ route("admin.posts.show", $post)}}" class="btn btn-primary">Apri post</a>
            </div>
        </div>
    
        @endforeach
    </div>
</div>

@endsection