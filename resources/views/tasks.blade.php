@extends('layout.app')

@section('content')

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Tasks
            </div>
            <div class="panel-body">
                <!-- validation display-->
                @include(common.errors)
                 <!-- new task form-->
                 <form action="{{ url('task') }} " method="POST" class="form-horizon">
                    {{ csrf_field() }}
                    
                    <div class='form-group'>
                        <label for="task-name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task name" class="form-control" value="{{ old('task')}"/>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-plus"> Add Task
                            </button>
                        </div>
                    </div>
                 </form>
            </div>     
        </div>
        @if(count($task) > 0) 
        <div class="panel panel-default">
            <div class="panel-heading">
                    Current Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($task as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->name}}</div>
                            </td>
                            <td>
                                <form action="{{ url('task/'.$task->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"> Add Task
                            </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection