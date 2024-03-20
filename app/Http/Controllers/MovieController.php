<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

//* mostra la lista della risorsa movie
class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // $movies_id = $movies->pluck('id');

        // dd($movies_id);

        return view('movies.index', compact('movies'));
    }

    //* mostra il dettaglio di un elemento della risorsa movie
    public function show(int $id)
    {
        // $movies = Movie::where('id', $id)->first();

        $movie = Movie::find($id);

        // if (empty($movie)) {
        //     abort(404);
        // }

        return view('movies.show', compact('movie'));
    }
}
