@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h2>NEW COMIC BOOK</h2>

        <form method="POST">

            @csrf

            {{-- TITOLO --}}
            <label for="title">Title</label>
            <br>
            <input type="text" name="title">
            <br>

            {{-- IMG --}}
            <label for="thumb">Image source</label>
            <br>
            <input type="text" name="thumb">
            <br>

            {{-- DESCRIPTION --}}
            <label for="description">Description</label>
            <br>
            <input type="text" name="description">
            <br>

            {{-- SERIE --}}
            <label for="series">Series</label>
            <br>
            <input type="text" name="series">
            <br>

            {{-- PRICE --}}
            <label for="price">Price</label>
            <br>
            <input type="text" name="price">
            <br>

            <input class="my-3" type="submit" value="CREATE">

        </form>
    </div>
@endsection
