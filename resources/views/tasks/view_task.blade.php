@extends('layouts.fe_layout')
@section('content')
    <h5>Nome da Tarefa: {{ $ourTask->name }}</h5>
    <h6>Decrição:{{ $ourTask->description }}</h6>
    <h6>Data de Conclusão:{{ $ourTask->due_at }}</h6>
    <h6>Status:{{ $ourTask->status }} </h6>
    <h6>Responsável:{{ $ourTask->user_name }}</h6>
@endsection
