@extends('layouts.fe_layout')

@section('content')
    <h1>Olá estou em casa</h1>
    <img class="my-image" src="{{ asset('images/what-is-software-CA-Capterra-Header.png') }}" alt="">


    <ul>
        <li><a href="{{ route('users.all') }}">Todos os Users</a></li>
        <li> <a href="{{ route('welcome') }}">Welcome Page</a> </li>
        <li><a href="{{ route('hello') }}">Hello</a> </li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a> </li>
    </ul>
@endsection
