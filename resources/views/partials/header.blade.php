
<div style="height:16px;" class="container-fluid bg-dark divider"></div>

<section class="border border-accent " > 

	<div class="container ">
		
		<div class="row">
			
			<div class="col-lg-12 font-xs reset-padding">
				
				<p class="border-right 
						  inline-block 
						  border-accent 
						  space-inside-xs 
						  space-inside-right-sm

						  xs-block
						  xs-text-center
						  xs-space-inside-right-lg-none

				">
					Email: 
					<span class="text-color-secondary								
						  		text-hover-bold
						  		transition-normal
						  		pointer
					">
						info@amiante-inspections.nl
					</span>
				</p>

				<p class="border-right 
						  inline-block 
						  border-accent 
						  space-inside-xs 
						  space-inside-sides-sm
						  xs-block
						  xs-text-center
						  xs-space-inside-sides-lg-none
				">
					Telefoon:
					<span class="text-color-secondary
								text-hover-bold
						  		transition-normal
						  		pointer
					">
						+31 63 84 73 167
					</span>
				</p>

				<p class="border-right 
						  inline-block 
						  border-accent 
						  space-inside-xs 
						  space-inside-sides-sm
						  xs-block
						  xs-text-center
						  xs-space-inside-sides-lg-none
				">
					Adres: 
					<span class="text-color-secondary
								text-hover-bold
						  		transition-normal
						  		pointer
					">
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

		    	<div style='width:150px;' class='left image space-inside-xs'>

		    		<img src='images/amiante-logo-no-text.jpg' style='object-fit: contain;' />

		    	</div>
		      
		      <ul class="nav navbar-nav navbar-right ">
		      

				<li class=" ">
					<a class="{{ Request::path() == '/' ? ' xs-text-color-light text-thin xs-bg-main' : 'text-color-dark text-light' }}  xs-text-center font-sm " href="/">
						Home
					</a>
				</li>

				<li class="{{ Request::path() == 'Bedrijfsinformatie' ? 'active' : '' }}">
					<a class="xs-text-center font-sm text-light xs-bg-hover-main xs-text-hover-light xs-text-color-dark"  href="/bedrijfsinformatie">
						Bedrijfsinformatie
					</a>
				</li>


				<li class="{{ Request::path() == 'projecten' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light xs-bg-hover-main xs-text-hover-light xs-text-color-dark" href="/diensten"> 
						Diensten 
					</a>
				</li>

				<li class="{{ Request::path() == 'betimmering-interieur' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light xs-bg-hover-main xs-text-hover-light xs-text-color-dark" href="/projecten">
						Projecten
					</a>
				</li>


				<li class="{{ Request::path() == 'betimmering-exterieur' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light xs-bg-hover-main xs-text-hover-light xs-text-color-dark"  href="/actueel">
						Actueel
					</a>
				</li>


				<li class="{{ Request::path() == 'betimmering-schepen' ? 'active' : '' }}">
					<a  class="xs-text-center font-sm text-light xs-bg-hover-main xs-text-hover-light xs-text-color-dark" href="/contact">
						Contact
					</a>
				</li>

		      </ul>

		    </div><!-- /.navbar-collapse -->

		  </div><!-- /.container-fluid -->

		</nav>

	</div>

</div>