
<x-app-layouts>
    <h1>"Formulario para crear un nuevo POST."</h1>
    {{-- <form action="/posts" method="POST"> --}}
    <form action="{{ route('posts.store')   }}" method="POST">
        @csrf 
        <label>
            Titulo:
            <input type="text" name="title">
        </label>
        <br></br>
        <label>
            Categoria:
            <input type="text" name="category">
        </label>
        <br></br>
        <label>
            Contenido:
            <textarea name="content"></textarea>
        </label>
        <br></br>
        <button type="submit">Crear Post</button>
        <br></br>
        <a href="/posts">Volver a posts</a>
    </form>
</x-app-layouts>