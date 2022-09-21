@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                     <table class="table table-secondary table-hover">
                    <thead class="table-success">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Post Date</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr >
                                <td>{{ $post->id }}</td>
                                <td>
                                    <a href="{{ route("admin.posts.show", $post) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->author}}</td>
                                <td>{{ $post->post_date}}</td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}">
                                        <button class="btn btn-sm btn-success text-light font-weight-bold">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="">
                                            <button class="btn btn-sm btn-danger font-weight-bold">Delete</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr colspan=10>
                                <td>Non sono stati trovati posts da visualizzare</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
