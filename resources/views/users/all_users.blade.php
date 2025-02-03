@extends('layouts.fe_layout')
@section('content')
    <h3>Olá aqui vais ter todos os users</h3>
    <h6>olá {{ $myName }}</h6>
    <ul>
        @foreach ($allUsers as $user)
            <li>{{ $user['id']}} - {{ $user['name'] }} : {{ $user['email'] }} </li>
        @endforeach
    </ul>
@endsection
