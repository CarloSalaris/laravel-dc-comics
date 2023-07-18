@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h1 class="mb-3">List of comics</h1>

        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li class="border p-3 d-flex align-items-center justify-content-between">

                    <div class="thumb_prev">

                        <img src="{{ $comic->thumb }}" alt="comic preview">

                    </div>

                    <h4>
                        <a class="text-decoration-none" href="{{ route('comics.show', $comic->id) }}">
                            {{ $comic->title }}
                        </a>
                    </h4>

                    <div>

                        <a class="m-4 btn btn-primary m-3 px-4" href="{{ route('comics.edit', $comic->id) }}"
                            role="button">EDIT</a>

                        <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-warning m-3 px-4" type="submit" value="DELETE">
                        </form>
                    </div>

                </li>
            @endforeach
        </ul>

        <a class="btn btn-primary mb-3" href="{{ route('comics.create') }}" role="button">Create a new one</a>

    </div>
@endsection
