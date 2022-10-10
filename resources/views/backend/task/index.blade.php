@extends('layouts.backend')

@section('main-container')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Task List</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div class="block-content">

                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{ route('tasks.store') }}" method="post">
                                @csrf
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" id="example-group3-input2" name="title"
                                        placeholder="task title (*required)">
                                    <input type="text" class="form-control" id="example-group3-input2" name="content"
                                        placeholder="task content (* not required)">
                                    <button type="submit" class="btn btn-secondary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th style="width: 20%;">Title</th>
                                <th class="d-none d-sm-table-cell" style="width: 100%;">Content</th>
                                <th class="d-none d-md-table-cell" style="width: 100%;">Status</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr class="@if ($task->status) disabled text-decoration-line-through @endif">
                                    <td class="d-none d-sm-table-cell">{{ $task->title }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $task->content }}</td>
                                    <td class="d-none d-md-table-cell">
                                        @if ($task->status)
                                            <span class="badge bg-success w-100">done</span>
                                        @else
                                            <span class="badge bg-warning w-100">to do</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                                                class="btn btn-sm  @if ($task->status) disabled @endif
                                                btn-secondary js-bs-tooltip-enabled"
                                                data-bs-toggle="tooltip" aria-label="Edit">
                                                Edit
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger"
                                                onclick="
                                                    event.preventDefault();
                                                    document.getElementById('delete-form').submit();
                                                ">
                                                Delete
                                            </a>

                                            <form method="POST" id="delete-form"
                                                action="{{ route('tasks.destroy', [$task->id]) }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            {!! $tasks->withQueryString()->links('pagination::bootstrap-5') !!}
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
        <!-- END Page Content -->

    </main>
@endsection
