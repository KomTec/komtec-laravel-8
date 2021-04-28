<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KomTec | Blog</title>
</head>
<body>

    <a href="#"> Novo Post</a>

    <hr>

    <h1>Blog KomTec</h1>

    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach

    
</body>
</html>