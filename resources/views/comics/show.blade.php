@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <div class="card">
            <div class="card-header">
                <h2> {{ $comic->title }} </h2>
            </div>

            <div class="card-body">

                <div class="mb-3">
                    <img src=" {{ $comic->thumb }} " alt="comic cover">
                </div>


                <h4><b>Description</b></h4>

                <p>
                    {{ $comic->description }}
                </p>

            </div>

            <div class="card-footer">

                <div class="row justify-content-around">
                    <div class="col">
                        <b>Series: </b>
                        {{ $comic->series }}
                    </div>
                    <div class="col">
                        <b>Price: </b>
                        {{ $comic->price }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
