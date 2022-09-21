@extends('layouts.app')

@section('title', 'Comic')

@section('content')
    <div class="container p-5">
        <div class="row justify-content-center">
             @if (session('edited'))
                <div class="alert alert-success">
                    {{ session('edited') }} è stato modificato correttamente!
                </div>
            @endif
             @if (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }} è stato creato correttamente!
                </div>
            @endif
            <div class="card col-12" style="width: 18rem;">
                <img src="{{$post->post_image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title fw-bold">{{ $post->title }}</h4>
                    <p class="card-text">{{ $post->post_content }}.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5 class="fw-bold">Autore:</h5>{{ $post->user->name }}
                    </li>
                    <li class="list-group-item">
                        <h5 class="fw-bold">Creato il:</h5>{{ $post->post_date }}
                    </li>
                </ul>
            </div>

            <div class="d-flex justify-content-center mt-4">

                <a href="{{ route('admin.posts.edit', $post->id) }}">
                    <button class="btn btn-sm btn-warning btn-lg font-weight-bold text-center p-3 fs-3 text-light mx-3">Modifica il Post</button>
                </a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="">
                        <button class="btn btn-sm btn-danger btn-lg font-weight-bold text-center p-3 fs-3 mx-3">Cancella il Post</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
