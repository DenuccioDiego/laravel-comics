<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DC-COMICS</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        

</head>

<body>
     
        @include('partials.header')

        @include('partials.jumbotron')

        <main id="site_main" class="">
                @yield('content')
        </main>

        
        @include('partials.footer')
        @include('partials.footer_bottom')


        @yield('custom-js')

</body>
</html>