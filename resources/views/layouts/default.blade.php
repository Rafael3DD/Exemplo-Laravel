<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    {{-- @stack('styles') --}}
    @vite('resources/css/app.css')

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <title>@yield('title', 'Meu titulo')</title>
</head>
<body>
    @section('sidebar')
        <div>
            <nav>
                valor da seção sidebar
            </nav>
        </div>
    @show

    @yield('content')

    <script src="{{asset('js/script.js')}}"></script>
    @stack('scripts')
</body>
</html>