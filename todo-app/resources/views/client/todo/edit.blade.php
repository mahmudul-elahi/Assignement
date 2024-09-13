@extends('client.master')

@section('title', 'Todo List')

@section('content')
    <div class="row mt-5">
        <div class="col-md-7 mx-auto">
            <div class="bg-white rounded p-5">
                <h3 class="text-center mb-4">EDIT TODO</h3>

                <form action="{{ route('todo.update', $todo) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-5">
                        <input name="todo_title" type="text" class="form-control" aria-describedby="button1"
                            value="{{ $todo->todo_title }}">
                        <button class="btn btn-outline-secondary" type="submit" id="button1"><i
                                class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
