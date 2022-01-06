@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @include('layouts.alerts')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('todos.store') }}">
                    @csrf
                    <div class="card-header"><b>{{ __('New Todo') }}</b></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }}</label>

                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title') }}" required>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">
                                        {{ __('Add') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <hr />
            <div class="card">
                <div class="card-header"><b>{{ __('All Todos') }}</b></div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @forelse ($todos as $todo)
                            <tr>
                                @if ($todo->completed == false)
                                <td>{{ $todo->title }}</td>
                                @else
                                <td>
                                    <p class="strike-through">{{ $todo->title }}</p>
                                </td>
                                @endif

                                @if ($todo->completed == false)
                                <td>
                                    <div class="badge badge-info">pending</div>
                                </td>
                                @else
                                <td>
                                    <div class="badge badge-success">completed</div>
                                </td>
                                @endif
                                <td>

                                    <form style="display: inline-block" action="{{ route('todos.update', $todo) }}"
                                        method="post">
                                        @csrf
                                        @method('PATCH')
                                        @if ($todo->completed == false)
                                        <button class="btn btn-outline-info btn-sm" type="submit">✔</button>
                                        @else
                                        <button class="btn btn-outline-success btn-sm" type="submit">✔</button>
                                        @endif
                                    </form>

                                    <a href="{{ route('todos.show', $todo) }}"
                                        class="btn btn-outline-warning btn-sm">+</a>

                                    <form style="display: inline-block" action="{{ route('todos.destroy', $todo) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')"
                                            class="btn btn-outline-danger btn-sm" type="submit">X</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <h5>No Todos to show!</h5>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- @livewire('counter') --}}
        </div>
    </div>
</div>
@endsection