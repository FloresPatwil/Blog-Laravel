
<x-app-layouts>
    <h1>"Formulario para crear un nuevo POST."</h1>
    {{-- <form action="/posts" method="POST"> --}}
    {{ __('Client Closed Request') }}
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
    <form action="{{ route('posts.store')   }}" method="POST">
        @csrf 
        <label>
            Titulo:
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        {{-- @error('title') Posible
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            
        @enderror --}}
        <br></br>
        <label>
            Slug:
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>
        <br></br>
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        <br></br>
        <label>
            Contenido:
            <textarea value="{{ old('content') }}" name="content"></textarea>
        </label>
        <br></br>
        <button type="submit">Crear Post</button>
        <br></br>
        <a href="/posts">Volver a posts</a>
    </form>
</x-app-layouts>