@extends('master')


@section('content')

	<section class="bg-accent space-inside-lg">
		
		<div class="container ">
			
			<div class="row space-inside-down-sm">

				<div class="col-lg-12 space-inside-down-lg text-center">
					
					<h1 class="text-thin space-inside-down-sm">Onze <span class="text-bold">Projecten</span></h1>
					
					<p class="text-color-accent-darken-md font-md"> Hieronder onze recente projecten</p>

				</div>


			<div class="col-lg-6 space-inside-sides-xl ">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac fermentum arcu. Quisque tortor dui, imperdiet quis lectus sit amet, vestibulum hendrerit nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus tempus in leo et molestie. Sed lorem est, placerat id tincidunt vitae, molestie in ex. Cras ullamcorper finibus auctor. Pellentesque leo velit, tempor ut felis et, tristique facilisis arcu.
				</p>
				<br/>
				<p>
					Donec tristique, purus at consequat molestie, nibh justo vulputate odio, eu accumsan mauris diam fringilla massa. Donec in sodales turpis, nec laoreet orci. Pellentesque nec turpis mi. Ut quis tortor vitae nunc egestas posuere vitae sit amet purus. Phasellus facilisis varius ante eget porta. Nam faucibus mauris eget luctus hendrerit.
				</p>
			</div>

			<div class="col-lg-6 space-inside-sides-xl">

				<img src='images/voorbeeldfoto.jpeg' style='width:500px;' class='img-responsive' />

			</div>

		</div>

	</section>

	<section class="container space-outside-lg">

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

	            <ul class="nav nav-tabs">
				  <li role="presentation" class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				      Kies categorie <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li><a href="#">Alle</a></li>
				      <li><a href="#">Renovatie</a></li>
				      <li><a href="#">Totaalsloop</a></li>
				      <li><a href="#">Utiliteitsbouw</a></li>
				      <li><a href="#">Woningen</a></li>
				      <li><a href="#">Calamiteiten</a></li>
				    </ul>
				  </li>
				</ul>
        	</div>

		</div>

	</section>



@stop