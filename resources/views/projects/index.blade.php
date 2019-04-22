<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Projects</h1>
<a href="/projects/create">You can create new projects from here</a>
@foreach ($projects as $project)
    <li>
        <a href="/projects/{{ $project->id }}">
        View {{ $project->title }}
        </a>
        |
        <a href="/projects/{{ $project->id }}/edit">
            Edit | Delete
        </a>
    </li>
@endforeach
</body>
</html>