@extends('layout')
@section('title','testing')
@section('content')
    <h1>my {{ $title }}</h1>
    <ul>
    @foreach($tasks as $task)
    <li>{{ $task }}</li>
    @endforeach
    </ul>
@endsection
