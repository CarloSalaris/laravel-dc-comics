@extends('layouts.main-layout')

@section('title')
    CREATE
@endsection

@section('content')
    <div class="container text-center">
        <h2>NEW COMIC BOOK</h2>

        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            {{-- TITOLO --}}
            <label for="title">Title</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="title">
            <br>

            {{-- IMG --}}
            <label for="thumb">Image source</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="thumb">
            <br>

            {{-- DESCRIPTION --}}
            <label for="description">Description</label>
            <br>
            <textarea class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="description">
            </textarea>
            <br>

            {{-- SERIE --}}
            <label for="series">Series</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="series">
            <br>

            {{-- PRICE --}}
            <label for="price">Price</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="price">
            <br>

            {{-- SALE DATE --}}
            <label for="sale_date">Sale date</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="date" name="sale_date">
            <br>

            {{-- TYPE --}}
            <label for="type">Type</label>
            <br>
            <input class="mb-3 mt-2 col-12 col-md-8 col-xl-6 text-center" type="text" name="type">
            <br>


            <input class="btn btn-primary m-3 px-4" type="submit" value="CREATE">

            <a class="btn btn-secondary m-3 px-4" href="{{ route('comics.index') }}" role="button">BACK</a>
        </form>

    </div>
@endsection
