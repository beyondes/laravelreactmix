@extends('layout')

@section('content')
    <h1>Edit project</h1>
    <form method="post" action="/projects/{{ $project->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="title">
            <label>Title</label>
            <input type="text" value="{{ $project->title }}" placeholder="area" name="title" />
        </div>
        <div class="description">
            <label>description</label>
            <textarea name="description">{{ $project->description}}</textarea>
        </div>
        <button type="submit"  value="Update">Update</button>

    </form>
    <form method="post" action="/projects/{{ $project->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="submit">
            <button type="submit" value="Delete">Delete</button>

        </div>
    </form>
@endsection