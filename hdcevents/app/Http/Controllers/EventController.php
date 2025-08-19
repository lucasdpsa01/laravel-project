<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index () {
        $nome = "Lucas Daniel Paiva de Sá";
        $idade = 20;

        $arr = ["A", "B", "C", "D"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'array' => $arr
        ]);
    }

    public function create () {
        $palavras = ["cadeira", "camiseta", "celular", "teclado"];

        return view('home', [
            'palavras' => $palavras
        ]);
    }

}
