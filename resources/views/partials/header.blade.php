
<div style="height:16px;" class="container-fluid bg-dark divider"></div>

<section class="border border-accent " > 

	<div class="container ">
		
		<div class="row">
			
			<div class="col-lg-12 font-xs">
				
				<p class="border-right 
						  inline-block 
						  border-accent 
						  space-inside-xs 
						  space-inside-right-sm
				">
					Email: 
					<span class="text-color-secondary">
						info@amiante-inspections.nl
					</span>
				</p>

				<p class="border-right 
						  inline-block 
						  border-accent 
						  space-inside-xs 
						  space-inside-sides-sm
				">
					Telefoon:
					<span class="text-color-secondary">
						+31 63 84 73 167
					</span>
				</p>

				<p class="border-right 
						  inline-block 
						  border-accent 
						  space-inside-xs 
						  space-inside-sides-sm
				">
					Adres: 
					<span class="text-color-secondary">
						 Westkern 4, 9288 CD Kootstertille
					</span>
				</p>

	 
			</div>

		</div>

	</div>

</section>

<div  class="navbar-background ">

	<div class="container reset-padding">

		<nav  class="navbar navbar-default">

		  <div class="container">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    
		    <div class="navbar-header">

		      <button type="button" 
		      		  class="navbar-toggle collapsed" 
		      		  data-toggle="collapse" 
		      		  data-target="#bs-example-navbar-collapse-1" 
		      		  aria-expanded="false"
		      >
		      
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		  
		      </button>

		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      <ul class="nav navbar-nav navbar-right">
		      
				<li >
					<a class="xs-text-center font-sm text-light {{ Request::path() == '/' ? 'bg-main text-color-light' : '' }} " href="/">
						Home
					</a>
				</li>

				<li class="{{ Request::path() == 'over-ons' ? 'active' : '' }}">
					<a class="xs-text-center font-sm text-light"  href="/over-ons">
						Bedrijfsinformatie
					</a>
				</li>

				<li class="{{ Request::path() == 'diensten' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light" href="/diensten"> 
						Diensten 
					</a>
				</li>

				<li class="{{ Request::path() == 'projecten' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light" href="/projecten">
						Projecten
					</a>
				</li>

				<li class="{{ Request::path() == 'actueel' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light"  href="/actueel">
						Actueel
					</a>
				</li>

				<li class="{{ Request::path() == 'contact' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light" href="/contact">
						Contact
					</a>
				</li>

		      </ul>

		    </div><!-- /.navbar-collapse -->

		  </div><!-- /.container-fluid -->

		</nav>

	</div>

</div>