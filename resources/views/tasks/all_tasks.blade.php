@extends('layouts.fe_layout')
@section('content')
    <h3>Tasks vindas da BD</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Data Conclusão</th>
                <th scope="col">User</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasksFromDB as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_at }}</td>
                    <td>{{ $task->user_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
