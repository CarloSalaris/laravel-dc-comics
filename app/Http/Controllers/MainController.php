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
}
