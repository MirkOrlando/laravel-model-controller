@extends('layouts.app')

@section('content')
    <div class="movies">
        <div class="container">
            <h1>My Movies</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 gy-3">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">{{ $movie->title }}</h4>
                                <p class="card-text"><strong>Original title: </strong>{{ $movie->original_title }}</p>
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
