@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-xs-3">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">@lang('tasks.new.task')</div>

            <div class="panel-body">
                <form action="{{ route('task.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="task-name">@lang('tasks.task')</label>
                        <input id="task-name" type="text" name="name" placeholder="@lang('tasks.task.name')" class="form-control" maxlength="255" required>
                    </div>

                    <button type="submit" class="btn btn-primary col-xs-12">@lang('tasks.add')</button>
                </form>
            </div>
        </div>
    </div>

    @if (count($tasks) > 0)
        <div class="col-xs-9">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('tasks.task.list')</div>

                <ul class="list-group">
                    @foreach ($tasks as $task)
                        <li class="list-group-item">
                            {{ $task->name }}

                            <!-- TODO: Delete Button -->
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
@endsection
