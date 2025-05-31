<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Coders Free')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- fonteawesome --}}
    {{-- tipografica --}}
    @stack('css')
</head>
<body>
    <header></header>

    @yield('content')
    
    <footer></footer>

        
</body>
</html>
