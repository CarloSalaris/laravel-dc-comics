@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <div class="card">
            <div class="card-header">
                <h2> {{ $comic->title }} </h2>
            </div>

            <div class="card-body">

                <div class="mb-3 text-center d-flex justify-content-center">
                    <div class="img_container"><img src=" {{ $comic->thumb }} " alt="comic cover"></div>
                </div>


                <h4><b>Description</b></h4>

                <p>
                    {{ $comic->description }}
                </p>

            </div>

            <div class="card-footer py-3">

                <div class="row justify-content-around">
                    <div class="col">
                        <b>Series: </b>
                        {{ $comic->series }}
                    </div>
                    <div class="col">
                        <b>Price: </b>
                        {{ $comic->price }}
                    </div>
                    <div class="col">
                        <b>Type: </b>
                        {{ $comic->type }}
                    </div>
                </div>

            </div>

        </div>

        <a class="mt-4 btn btn-primary" href="{{ route('comics.index') }}" role="button">back to the list</a>

    </div>
@endsection