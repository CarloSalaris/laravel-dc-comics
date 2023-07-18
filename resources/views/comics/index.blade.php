@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h1 class="mb-3">List of comics</h1>

        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li class="border p-3">
                    <a class="text-decoration-none" href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                </li>
            @endforeach
        </ul>

        <a class="btn btn-primary mb-3" href="{{ route('comics.create') }}" role="button">Create a new one</a>

    </div>
@endsection
