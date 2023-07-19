@extends('layouts.main-layout')

@section('title')
    EDIT
@endsection

@section('content')
    <div class="container text-center">
        <h2>NEW COMIC BOOK</h2>

        <form method="POST" class="row justify-content-center" action="{{ route('comics.update', $comic->id) }}">

            @csrf

            @method('PUT')

            {{-- TITOLO --}}
            <label for="title">Title</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="title"
                value="{{ $comic->title }}">
            <br>

            {{-- IMG --}}
            <label for="thumb">Image source</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6" type="text" name="thumb" value="{{ $comic->thumb }}">
            <br>
            <div class="mb-3 mt-2 col-12 col-md-8 col-xl-6 sm_img_container">
                <img src="{{ $comic->thumb }}" alt="thumb preview">
            </div>

            {{-- DESCRIPTION --}}
            <label for="description">Description</label>
            <br>
            <textarea class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="description"> {{ $comic->description }}
            </textarea>
            <br>

            {{-- SERIE --}}
            <label for="series">Series</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="series"
                value="{{ $comic->series }}">
            <br>

            {{-- PRICE --}}
            <label for="price">Price</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="price"
                value="{{ $comic->price }}">
            <br>

            {{-- SALE DATE --}}
            <label for="sale_date">Sale date</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="date" name="sale_date"
                value="{{ $comic->sale_date }}">
            <br>

            {{-- TYPE --}}
            <label for="type">Type</label>
            <br>
            <input class="mb-3 mt-2 col-md-8 col-xl-6 text-center" type="text" name="type"
                value="{{ $comic->type }}">
            <br>


            <div>
                <input class="btn btn-primary m-3 px-4" type="submit" value="UPDATE">
                <a class="btn btn-secondary m-3 px-4" href="{{ route('comics.index') }}" role="button">BACK TO LIST</a>

            </div>

        </form>
    </div>
@endsection
