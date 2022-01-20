<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
