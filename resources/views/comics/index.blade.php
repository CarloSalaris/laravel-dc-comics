@extends('layouts.main-layout')

@section('title')
    INDEX
@endsection

@section('content')
    <div class="container text-center">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="d-inline m-3">List of comics</h1>
            <a class="btn btn-light border" href="{{ route('comics.create') }}" role="button">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>

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
                            role="button">
                            EDIT
                        </a>

                        <form action="{{ route('comics.delete', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-warning m-3 px-4" type="submit" value="DELETE">
                        </form>

                        <!-- Modal trigger -->
                        <button type="button" class="btn btn-warning m-3 px-4" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            DELETE (Modal)
                        </button>

                    </div>

                </li>
            @endforeach
        </ul>

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">DELETE COMIC BOOK</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this comic book?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                        <form action="{{ route('comics.delete', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-warning m-3 px-4" type="submit" value="DELETE">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn btn-primary my-3" href="{{ route('comics.create') }}" role="button">Create a new one</a>

    </div>
@endsection
