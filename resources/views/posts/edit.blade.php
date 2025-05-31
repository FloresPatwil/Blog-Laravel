<x-app-layouts>
    <h1>"Formulario para crear un nuevo POST."</h1>
    {{-- <form action="/posts/{{ $post->id }}" method="POST"> --}}
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label>
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br></br>
        <label>
            Categoria:
            <input type="text" name="category" value="{{$post->categoria}}">
        </label>
        <br></br>
        <label>
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br></br>
        <button type="submit">Actualizar</button>
        <br></br>
        <a href="/posts">Volver a posts</a>
    </form>
</x-app-layouts>