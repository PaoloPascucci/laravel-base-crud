<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
        @include('Factors.header')

        <!-- /#site_header -->
        <main id="site_main" class="py-5">
            @yield('content')
        </main>
        <!-- /#site_main -->
    
        @include('Factors.footer')
    
        <!-- /#site_footer -->
    </body>
</html>
