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

            $this -> getValidationRule(),
            $this -> getValidationMessages()
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

            $this -> getValidationRule(),
            $this -> getValidationMessages()
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
            "description" => 'nullable|max:65536',
            "thumb" => 'nullable|max:65536',
            "price" => 'required|starts_with:$',
            "series" => 'required|min:1|max:128',
            "sale_date" => 'required|date',
            "type" => 'required|min:1|max:128'
        ];
    }

    private function getValidationMessages() {

        return [
            "title.required" => "Il titolo è necessario",
            "title.min" => "Il titolo non può essere più breve di 3 caratteri",
            "title.max" => "Il titolo non può essere più lungo di 3 caratteri",
            "price.required" => "il prezzo è necessario",
            "price.starts_with" => "il prezzo dev'essere preceduto dal simbolo $",
            "series.required" => "la serie è necessaria",
            "sale_date.required" => "la data di aquisto è necessaria",
            "type.required" => "il tipo è necessario"
        ];
    }
}

