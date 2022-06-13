@extends('layouts.app')

@section('content')
    <div class="p-5 bg-dark">
        <h1 class="display-3">My Site</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sapiente.</p>
    </div>
    <div class="movies py-5">
        <div class="container">
            <h2>My Movies</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 gy-3">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">{{ $movie->title }}</h4>
                                <p class="card-text"><strong>Original title: </strong>{{ $movie->original_title }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Nothing to show</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
