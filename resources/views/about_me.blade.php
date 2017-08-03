@extends('main')

@section('title', 'About Me')

@section('content')
	<!--About Me-->
	<div id='aboutme' class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-3'>
					<img src='{!! asset('/images/profile.jpg') !!}' alt='Profile' class='img-responsive'/>
				</div>					
				<div class='col-md-9'>
					<h1>About Me</h1>
					<p class='lead'>I am your "average" young adult trying to make it through
						the complicated process called "life". I got great family and friends who have
						all helped me along the way, one way or another, in defining who I am today. 
						My greatest and longest running accomplishment is staying alive for twenty two years.
					</p>
				</div>			
			</div>
		</div>
	</div>

	<!--The Three c's-->
	<div id='threec' class='custom-contain'>
		<div class='container'>
			<h2 class='text-center'>The Three <strong>C's</strong> of Me!</h2>
			<div class='row match-my-cols text-white mrgn-bttm-md'>
				<div class='text-center'>
				<div class='col-sm-6 col-lg-4'>
				<div class='img__wrap'>
					<img src='{!! asset('/images/three_c/code.jpeg') !!}' 
						alt='Computer Science' class='img-responsive'/>
					<div class='img__description' style='background-color: rgba(102, 102, 255, 0.8)'>	
					<h3>Computer Scientist</h3>
					<p>As a computer scientist, I love problem solving. From brain teasers and puzzles to
						practical everyday problems, such as figuring out the fastest route to work or
						minimising packing space in my backpack, I enjoy problem solving. The field
						of digital technology is also an ever expanding one. There's always more to learn!</p>
					</div>
				</div>
				</div>
				<div class='col-sm-6 col-lg-4'>
				<div class='img__wrap'>
					<img src='{!! asset('/images/three_c/fence.jpg') !!}' 
						alt='Fence' class='img-responsive'/>	
					<div class='img__description' style='background-color: rgba(102, 187, 102, 0.8)'>
					<h3>Criminologist</h3>
					<p>People are interesting. Society is interesting. The social space, is a very complex 
						and dynamic realm of its own. While the computer scientist side of me likes to 
						understand the world we live in, the criminologist side
						of me likes to understand the people we live with.</p>
					</div>
				</div>
				</div>
				<div class='col-sm-6 col-lg-4'>
				<div class='img__wrap'>
					<img src='{!! asset('/images/three_c/cross3.jpg') !!}' 
						alt='Fence' class='img-responsive'/>	
					<div class='img__description' style='background-color: rgba(255, 102, 102, 0.8) '>	
					<h3>Christian</h3>
					<p>As a Christian, I believe in the Father, Son, and Holy Spirit. The aseity that poured 
						out his love and created you, me, and everything around us. My faith shapes the way
						I see and interact with the world. However, my understanding of nature and people
						help shape and develop my faith in turn! The more I learn about his creation, the more
						I learn about him.</p>
					</div>
				</div>
				</div>	
				</div>			
			</div>
			<div class='text-center'>
				<a href='{{route('blog.single', 'first-c-of-me')}}' class='btn btn-primary' role='button'>
					Read more
				</a>
			</div>
		</div>
	</div>
	<!--End of Three c's-->


	<!--Hobbies-->
	<div id='hobbies' class='custom-contain'>
		<div class='container'>
			<h2 class='text-center'>Hobbies <small>(Well..some of them)</small></h2>
			<div class='row mrgn-tp-md'>
				<div class='col-md-5'>
					<div id='danceCarousel' class='carousel slide' data-interval="false">
						<!--Indicators-->
					    <ol class="carousel-indicators">
					    	<li data-target="#danceCarousel" data-slide-to="0" class="active"></li>
					    	<li data-target="#danceCarousel" data-slide-to="1"></li>
					    	<li data-target="#danceCarousel" data-slide-to="2"></li>
					    </ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						    <div class="item active">
						      <img src='{{asset('/images/dance.jpg')}}' alt='Picture of me dancing'/>
						    </div>
						    <div class="item">
						      <img src='{{asset('/images/dance-2.jpg')}}' alt='Picture of me dancing'/>
						    </div>
						    <div class="item">
						      <img src='{{asset('/images/dance-3.jpg')}}' alt='Picture of me dancing'/>
						    </div>
						</div>	
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#danceCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#danceCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>		
					</div>				    
				</div>
				<div class='col-md-7'>
					<h3>Dancing</h3>
					<p>As soon as man could stand, he could dance...</p>
					<p>Dancing is an eloquent form of art that expresses both the profound sense of being and unscrutable passionate emotion. 
						In it's most raw form, it conveys the deepest mysteries of the nature of man, inexpressible through words.
						It is because of this, that I dutifuly move my body.</p>
				</div>
				<div class='clearfix'></div><br>
				<div class='col-md-7'>
					<h3>Martial Arts</h3>
					<p>I wish I could say that I did the butt kicking in both Karate and Taekondo. Alas,
						it was my butt that was kicked. Nonetheless, martial arts is great for exercise, 
						self-defense, and self-discipline and has therefore taught me a lot.</p>
				</div>
				<div class='col-md-5'>
					<div id='martialCarousel' class='carousel slide' data-interval="false">
						<!--Indicators-->
					    <ol class="carousel-indicators">
					    	<li data-target="#martialCarousel" data-slide-to="0" class="active"></li>
					    	<li data-target="#martialCarousel" data-slide-to="1"></li>
					    	<li data-target="#martialCarousel" data-slide-to="2"></li>
					    </ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						    <div class="item active">
						      <img src='{{asset('/images/karate.jpg')}}' alt='Picture of me getting my butt handed to me by my sensei'/>
						    </div>
						    <div class="item">
						      <img src='{{asset('/images/karate-2.jpg')}}' alt='Picture of me catching a breadth'/>
						    </div>
						    <div class="item">
						      <img src='{{asset('/images/taekwondo.jpg')}}' alt='Picture of me, my brother Daniel, and Master Tasse'/>
						    </div>
						</div>	
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#martialCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#martialCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>		
					</div>					
				</div>				
				<div class='clearfix'></div><br>				
				<div class='col-md-5'>
					<img src='{{asset('/images/barbeque.jpg')}}' alt='Picture of me barbequing with Josh' class='img-responsive'/>
				</div>
				<div class='col-md-7'>
					<h3>Cooking</h3>
					<p class='text'>Believe it or not (I'd rather you not), I use to be a horrible cook. Now I am mediocre.
						Cooking can be quite fun when you get to work fast and make ingredients sizzle. 
						Makes me feel confident about my cooking...until I take a bite.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--End of Hobbies-->
@stop