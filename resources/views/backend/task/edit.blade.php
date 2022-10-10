@extends('layouts.backend')

@section('main-container')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <a href="{{ url()->previous() }}" class="btn btn-info mb-3">
                <i class="nav-main-link-icon fa fa-arrow-left"> </i>  Back
            </a>
            
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Task Edit</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div class="block-content">
                    <form action="{{route('tasks.update', ['task' => $task->id])}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="block-content">
                            <div class="row justify-content-center py-sm-3 py-md-5">
                                <div class="col-sm-10 col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label" for="block-form5-username">Title</label>
                                        <input type="text" class="form-control form-control-alt" name="title" value="{{ $task->title }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="block-form5-username">Content</label>
                                        <input type="text" class="form-control form-control-alt" name="content"  value="{{ $task->content }}">
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" id="status" type="checkbox"
                                            @if ($task->status) checked @endif
                                                name="status">
                                            <label class="form-check-label" for="status">Is
                                                Complete?</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <!-- END Page Content -->

    </main>
@endsection


