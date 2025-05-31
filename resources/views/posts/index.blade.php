<x-app-layouts>
    <h1 >Aqui se mostraran all  POSTS</h1>
    {{-- <a href="/posts/create"> --}}
    <a href="{{ route('posts.create') }}">
        Nuevo Post
    </a>
    <ul>
        @foreach ($posts as $post)
         <li>
            {{-- <a href="/posts/{{ $post->id }}"> --}}
            <a href={{ route('posts.show', $post->id) }}>
                {{ $post->title }}
            </a>
         </li>   
        @endforeach
    </ul>
    {{ $posts->links() }}
</x-app-layouts>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- fonteawesome --}}
    {{-- tipografica --}}
{{-- </head>
<body>
    <header></header> --}}
    {{-- <h1>Aqui se mostraran all  POSTS</h1> --}}
    {{-- <footer></footer>
</body>
</html> --}}