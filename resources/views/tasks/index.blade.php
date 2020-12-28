@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-xs-3">
        <div class="panel panel-default">
            <div class="panel-heading">@lang('tasks.new.task')</div>

            <div class="panel-body">
                <form action="{{ route('task.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="task-name">@lang('tasks.task')</label>
                        <input id="task-name" type="text" name="name" placeholder="@lang('tasks.task.name')" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary col-xs-12">@lang('tasks.add')</button>
                </form>
            </div>
        </div>
    </div>

    <!-- TODO: Task List -->
</div>
@endsection
