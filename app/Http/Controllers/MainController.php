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

        $data = $request -> validate(

            $this -> getValidationRule()
        );

        $comic = Comic :: create($data);

        return redirect() -> route("comics.show", $comic -> id);
    }

    public function show($id) {

        $comic = Comic :: findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    public function edit($id) {

        $comic = Comic :: findOrFail($id);

        return view('comics.edit', compact("comic"));
    }

    public function update(Request $request, $id) {

        $data = $request -> validate(

            $this -> getValidationRule()
        );

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('comics.show', $comic -> id);
    }

    public function delete($id) {
        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route("comics.index");
    }

    private function getValidationRule() {

        return [
            "title" => 'required|min:3|max:255',
            "description" => 'required|min:5|string',
            "thumb" => 'required|min:3|max:255',
            "price" => 'required|min:5|max:15',
            "series" => 'required|min:1|max:128',
            "sale_date" => 'required|date',
            "type" => 'required|min:1|max:128'
        ];
    }
}

