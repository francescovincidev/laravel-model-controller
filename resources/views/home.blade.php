@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-12">


            @foreach ($movies as $movie)
                <div class="card " style="width: 18rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $movie->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
