<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>

    <body>

      @include('partials.header')

      <main>
        <h1>main</h1>
        @yield('content')
      </main>

      @include('partials.footer')

    </body>

</html>