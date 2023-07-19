@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">
    <div class="row justift-content-center">
        <div class="col-12 d-flex">
            <a class="btn btn-success mb-3 me-3" href="{{route("admin.posts.edit", $post->id)}}">Modifica post</a>
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger me-3" value="Elimina post">
            </form>
        </div>

        <div class="col-12">
            <div>Post n° {{$post->id}}</div>
            <h1>{{$post->title}}</h1>
            <h3>Tipo: <span class="badge text-bg-primary">{{ $post->type->name }}</span></h3>
            <p class="card-text">{{ $post->content }}</p>
            <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
        </div>
        
    </div>
</div>

@endsection