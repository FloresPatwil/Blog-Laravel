<x-app-layouts>
    <h1>"Formulario para crear un nuevo POST."</h1>
    {{-- <form action="/posts/{{ $post->id }}" method="POST">  era con ID --}} 
    @if ($errors->any())
        <div class="alert alert-danger">
            <h2>Errores</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>     
    @endif
    <form action="{{ route('posts.update', $post) }}" method="POST"> 
        @csrf 
        @method('PUT')
        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>
        <br></br>
        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug',$post->slug)}}">
        </label>
        <br></br>
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria', $post->categoria)}}">
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