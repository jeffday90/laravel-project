<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create new project</h1>


    <form method="POST" action="/projects">
        {{-- laravel requires a token/auth out of the box, so we include this csrf field method --}}
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" value="{{ old('title')}}" required>
        </div>

        <div>
            <textarea name="description" value="{{ old('description')}}" required></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>

    </form>

    @include('errors')
    
</body>
</html>