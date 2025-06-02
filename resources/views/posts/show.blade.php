<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- <a href="/posts">Volver a posts</a> --}}
    <a href={{ route('posts.index') }}>Volver a posts</a>
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Categoria</b> {{ $post->categoria }}
    </p>
    <p>
        <b>Contenido</b> {{ $post->content }}
    </p>
    {{-- <p>
        <b>Slug</b> {{ $post->slug }}
    </p> --}}
    {{-- <a href="/posts/{{ $post->id }}/edit"> --}}
    <a href={{ route('posts.edit', $post) }}>
        Editar Post
    </a>
    {{-- <form action="/posts/{{ $post->id }}" method="POST"> --}}
    <form {{ route('posts.destroy', $post) }} method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar Post
        </button>
    </form>
</body>
</html>