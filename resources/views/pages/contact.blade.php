@extends('master')


@section('content')

	<section class="bg-accent space-inside-md">

		<div class="container">

			
			<div class="row space-inside-down-sm">

			<div class="col-lg-12 space-inside-down-lg text-center">
				
				<h1 class="text-thin space-inside-down-sm">Stuur ons een <span class="text-bold">Mail</span></h1>
				
				<p class="text-color-accent-darken-md font-md"> Neem contact met ons op </p>

			</div>

				<div class="col-lg-8 
						 	xs-text-center 
						 	sm-text-center
				">
					
					{!! Form::open(['method' => 'POST' ]) !!}
		

						<div class="col-lg-12 space-inside-xs">

			    		{!! Form::text('voornaam', null, ['required', 'placeholder' => 'Voornaam', 'class' => 'form-control border-secondary']) !!}

						</div>

						<div class="col-lg-12 space-inside-xs">
							
							{!! Form::text('achternaam', null, ['required', 'placeholder' => 'Achternaam', 'class' => 'form-control border-secondary']) !!}

						</div>

						<div class="col-lg-12 space-inside-xs">
							
							{!! Form::email('emailadres', null, ['required', 'placeholder' => 'Emailadres', 'class' => 'form-control border-secondary']) !!}

						</div>

						<div class="col-lg-12 space-inside-xs">
							
							{!! Form::text('telefoonnummer', null, ['required', 'placeholder' => 'Telefoonnummer', 'class' => 'form-control border-secondary']) !!}

						</div>

						<div class="col-lg-12 space-inside-xs">

							{!! Form::textarea('bericht', null, ['required', 'placeholder' => 'Uw bericht of opmerking', 'class' => 'textarea form-control border-secondary text-color-accent']) !!}

						</div>

						<div class="col-lg-12 space-inside-xs">

							 {!! Form::submit('Verzenden', ['class' => 'space-inside-sides-md space-inside-xs btn-standard bg-main text-color-light text-hover-light
							shadow-xs-hover 
							transition-normal ']) !!}

						</div>

						{!! Form::close() !!}
					

				</div>

				<div class="col-lg-4">

	    		<h2 class='space-outside-down-sm'>Contactinformatie</h2>

	    		<address>

	    			<p class='font-md space-outside-xs'><span class='text-color-secondary space-inside-xs space-inside-sides-xs space-outside-right-sm'>T</span>	0513 – 724234</p>

	    			<p class='font-md space-outside-xs'><span class='text-color-secondary space-inside-xs space-inside-sides-xs space-outside-right-sm'>A</span>	Leitswei 6, 8401 CL Gorredijk</p>

	    			<p class='font-md space-outside-xs'><span class='text-color-secondary space-inside-xs space-inside-sides-xs space-outside-right-sm'>M</span>	0031 638473167</p>	

	    			<p class='font-md space-outside-xs'><span class='text-color-secondary space-inside-xs space-inside-sides-xs space-outside-right-sm'>E</span>	martijn@amiantebv.nl</p>

	    			<p class='font-md space-outside-xs'><span class='text-color-secondary space-inside-xs space-inside-sides-xs space-outside-right-sm'>E</span>	amiante-inspections.nl	</p>	

	    			<p class='font-md space-outside-xs'><span class='text-color-secondary space-inside-xs space-inside-sides-xs space-outside-right-sm'>K</span>	KvK 65779304	</p>		

	    		</address>

	    	</div>

			</div>

		</div>

	</section>

	<div class="container-fluid">

		<div class="row">

	        <div class="col-lg-12">

	        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2400.709244767632!2d6.059278615825726!3d53.00761217990946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c85b3b0ca92a65%3A0xd3ba0b7864a8fb13!2sLeitswei+6%2C+8401+CL+Gorredijk!5e0!3m2!1snl!2snl!4v1478872590940" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

	    	</div>

    	</div>

    </div>

@stop