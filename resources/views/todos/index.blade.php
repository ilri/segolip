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
                <div class="card-header">{{ __('All Todos') }}</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $todo->title }}</td>
                                @if ($todo->completed == false)
                                <td>
                                    <div class="badge badge-danger">pending</div>
                                </td>
                                @else
                                <td>
                                    <div class="badge badge-success">completed</div>
                                </td>
                                @endif
                                <td><a href="{{ route('todos.edit', $todo) }}"
                                        class="btn btn-outline-primary btn-sm">Edit</a>

                                    <form style="display: inline-block" action="{{ route('todos.delete', $todo) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')"
                                            class="btn btn-outline-danger btn-sm" type="submit">Del</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection