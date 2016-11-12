<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>Laravel</title>


        <title>Amiante Inspections B.V>. || Asbestinventarisatie</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

        @include('partials.styles')

    </head>

    <body>


    	@include('partials.header')




        

        @include('partials.contact-balk')

        
    	@yield('content')	

        @include('partials.footer')

        @include('partials.scripts')

    </body>

</html>
