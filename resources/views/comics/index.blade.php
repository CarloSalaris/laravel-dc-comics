@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h1 class="mb-3">List of comics</h1>

        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li class="border p-3">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
