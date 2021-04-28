<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Post</title>
</head>
<body>
    
<h1>Cadastrar novo post.</h1>

<form action="{{ route('posts.store') }}" method="POST">

    <input type="text" name="title" id="title" placeholder="Título">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"></textarea>
    <button type="submit">Enviar</button>

</form>

</body>
</html>

