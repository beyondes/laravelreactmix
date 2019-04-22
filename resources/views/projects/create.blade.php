<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Document</title>
</head>
<body>
<h1>Create Projects</h1>
<form method="Post" action="/projects">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="project title" />
    </div>
    <div>
        <textarea name="description" placeholder="project description"></textarea>
    </div>
    <div>
        <button type="submit">Create Project</button>
    </div>
</form>
@if ($errors->any())
<div class="notification is-danger">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

</div>
@endif
</body>
</html>