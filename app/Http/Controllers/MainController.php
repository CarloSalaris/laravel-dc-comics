<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{

    public function index() {

        $comics = Comic :: all();

        return view('comics.index', compact('comics'));
    }

    public function create() {
        return view('comics.create');
    }

    public function store(Request $request) {

        $data = $request -> all();

        $comic = Comic :: create($data);

        return redirect() -> route("comics.show", $comic -> id);
    }

    public function show($id) {

        $comic = Comic :: findOrFail($id);

        return view('comics.show', compact('comic'));
    }

}

