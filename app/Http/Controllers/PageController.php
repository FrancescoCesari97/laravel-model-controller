<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //* mostra la homepage del sito
    public function index()
    {
        return view('home');
    }

    //* mostra la pagina about del sito
    public function about()
    {
        return view('about');
    }
}
