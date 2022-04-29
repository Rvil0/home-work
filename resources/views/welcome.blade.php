<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Главная страница</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <div class="bg-fixed no-repeat bg-cover bg-no-repeat" style="background-image: url(https://facultet.net/images/uploads/vuz/1554125358-maxresdefault.jpg)">
              <div class="flex items-top justify-center min-h-screen sm:items-center">
                  @if (Route::has('login'))
                      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                          @auth
                              <a href="{{ url('/dashboard') }}" class="border-4 border-double rounded-full border-sky-500 text-lg text-blue-700 font-semibold underline mx-2 hover:bg-sky-500 hover:text-white px-2 py-1.5">Личный кабинет</a>
                  @else
                              <a href="{{ route('login') }}"    class="border-4 border-double rounded-full border-sky-500 text-lg text-blue-700 font-semibold underline mx-2 hover:bg-sky-500 hover:text-white px-2 py-1.5">Войти</a>

                              @if (Route::has('register'))

                              <a href="{{ route('register') }}" class="border-4 border-double rounded-full border-sky-500 text-lg text-blue-700 font-semibold underline mx-2 hover:bg-sky-500 hover:text-white px-2 py-1.5">Регистрация</a>
                              @endif
                          @endauth
                      </div>
                  @endif
              </div>
          </div>
    </body>
</html>
