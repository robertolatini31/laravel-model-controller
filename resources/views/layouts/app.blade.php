<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        
        <header class="p-3 d-flex align-items-center justify-content-center">
            <div class="my_container d-flex align-items-center justify-content-center">
                <img class="logo" src="{{asset('/img/logo.png')}}" alt="logo">
                <h1 class="text-center">ineBool</h1>
            </div>
        </header>

        <main>
              @yield('content')
        </main>

        <footer class="d-flex align-items-center justify-content-center p-3">
            <h4 class="p-1">Made By Roberto&copy;</h4>
        </footer>

    </body>
</html>
