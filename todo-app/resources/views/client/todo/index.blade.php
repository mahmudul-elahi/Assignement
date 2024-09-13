@extends('client.master')

@section('title', 'Todo List')

@section('content')
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="bg-white rounded p-5">

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <h3 class="text-center mb-4">TODO LIST</h3>

                <form action="{{ route('todo.store') }}" method="POST">
                    @csrf
                    <div class="input-group mb-5">
                        <input name="todo_title" type="text" class="form-control" aria-describedby="button1">
                        <button class="btn btn-outline-secondary" type="submit" id="button1"><i
                                class="fa-solid fa-square-plus"></i></button>
                    </div>
                </form>

                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item">
                            <span>{{ $todo->todo_title }}</span>

                            <div class="action">
                                <a class="btn btn-sm btn-secondary" href="{{ route('todo.edit', $todo) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('todo.delete', $todo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-primary"><i class="fa-solid fa-check"></i></button>
                                </form>
                            </div>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
@endsection
