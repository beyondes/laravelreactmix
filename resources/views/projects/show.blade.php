@extends('layout')

@section('content')
    <h1>View Project {{ $project->title }}</h1>
    <div>{{ $project->description }}</div>
    @if($project->tasks->count())
        <div>
            <p>project tasks:</p>
            @foreach ($project->tasks as $task)
            <form method="post" action="/tasks/{{ $task->id }}">
                @method('PATCH')
                @csrf
                <label class="checkbox" for="completed">
                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                    {{ $task->description }}
                </label>
            </form>
            @endforeach
        </div>
    @endif
    <h1>Add Task form</h1>
    <form method="POST" action="/projects/{{ $project->id}}/tasks">
        @csrf
        <label>Task Description</label>
        <input type="text" name="description">
        <label class="checkbox" for="completed">
            <input type="checkbox" name="completed">
            Completed
        </label>
        <button type="submit">Create Task</button>
    </form>
@endsection
