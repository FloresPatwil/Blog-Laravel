<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
    Correo por aprobar
</h1>

<p>
    Se ha creado un nuevo post que requiere tu aprobación. Por favor, revisa el contenido y aprueba o rechaza la publicación.
</p>
<a href="{{ route('posts.show', $post) }}">
    Click here to accept
</a>
</body>
</html>