@extends('layouts.main-layout')

@section('content')
    <h1>List of comics</h1>

    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li> {{ $comic->title }} </li>
            @endforeach
        </ul>
    </div>
@endsection
