<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>Laravel</title>


        <title>Amiante Inspections B.V. || Asbestinventarisatie</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

        @include('partials.styles')

    </head>

    <body>


    	@include('partials.header')




        

        @include('partials.contact-balk')

        
    	@yield('content')	

        @include('partials.footer')

        @include('partials.scripts')
        <div style="position:fixed;right: 10px; bottom: 10px;" class=" col-lg-4 pointer shadow-xs shadow-xs-hover transition-normal absolute bg-accent space-inside-sides-lg space-inside-sm">
        
            <h3 class="text-light">Wat te doen bij <span class="text-bold">calamiteiten</span>? <span class="text-bold text-color-secondary float-right">0031 638473167</span>  </h3>

        </div>
    </body>

</html>
