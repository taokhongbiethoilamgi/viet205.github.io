<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travel Blogs Du Lịch</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="container-fluid">
            @include('pages.header')
            @include('pages.nav')
            @yield('content')
           
        </div>
        <div class="container footer">
            <p>This is footer</p>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"> </script>
    </body>
</html>
