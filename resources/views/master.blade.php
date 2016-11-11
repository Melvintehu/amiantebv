<!DOCTYPE html>

<html>

    <head>

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

        @include('partials.styles')

    </head>

    <body>


    	@include('partials.header')

        @include('partials.banner')

        @include('partials.contact-balk')
        
    	@yield('content')	

        @include('partials.footer')

    </body>

</html>
