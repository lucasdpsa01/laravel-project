@extends('layout.app')

@section('title', 'paivaAdmin')

@section('main', 'Página Inicial')

@section('footer', 'fim da página')

@section('header')
    <h1>Bem vindo!</h1>
    <p>Uma página de teste!</p>
    <ul>
        @foreach ($palavras as $p)
            <li>{{ $p }}</li>
        @endforeach
    </ul>
@endsection
