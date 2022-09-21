@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                   <button class="btn btn-primary font-weight-bold"><a class="text-light" href="{{ route('admin.posts.index') }}">Vai ai post</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
