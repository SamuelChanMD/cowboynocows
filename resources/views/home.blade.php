@extends('main')

@section('title', 'Home')

@section('content')
	<!--Home-->

	<!--Welcome-->
	<div id='welcome' class='custom-contain' >
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-10 col-md-offset-1 text-center'>
					<h1>Welcome To My Website!</h1>
					<p class='lead'>This is a simple website I have designed for fun and practice. 
						By all means, browse around and get to know me! 
						Don't forget to create an account so you can leave comments on my posts.
						Thanks for checking it out and I hope you like it  
						<span class='glyphicon glyphicon-thumbs-up'></span></p>
				</div>
			</div>
		</div>
	</div>
	<!--End of Welcome-->

	<!--Random Post-->
	<div id='featuredPost' class='custom-contain'>
		<div class='container-fluid'>
			<!--<h2 class='text-center'>Featured Posts</h2>-->
			<div class='row'>
				<div id='randomPost' class='col-md-8'>
					<div class='container-fluid mrgn-bttm-lg'>
						<div class='img-opacity'><a class='img-opacity' href='{{route('blog.single', $posts[0]->slug)}}'>
							<img class='img-responsive' src='{{asset('images/' . $posts[0]->image_url)}}' />
						</a></div>
						<div class='belowImg'>
							<h3>{{$posts[0]->title}}
								<span class='small text-white'>{{$posts[0]->created_at->format('Y-m-d')}}</span>
							</h3>
							<p>{!!substr(html_entity_decode($posts[0]->body), 0, 200)!!}
								{{(strlen($posts[0]->body) > 200) ? ".." : ""}}
							</p>
						</div>
					</div>
					<div class='container-fluid mrgn-bttm-lg'>
						<div class='img-opacity'><a class='img-opacity' href='{{route('blog.single', $posts[1]->slug)}}'>
							<img class='img-responsive' src='{{asset('images/' . $posts[1]->image_url)}}' />
						</a></div>
						<div class='belowImg'>
							<h3>{{$posts[1]->title}}
								<span class='small text-white'>{{$posts[1]->created_at->format('Y-m-d')}}</span>
							</h3>
							<p>{!!substr(html_entity_decode($posts[1]->body), 0, 200)!!}
								{{(strlen($posts[0]->body) > 200) ? ".." : ""}}
							</p>							
						</div>
					</div>
				</div>
<!--
					<div class='panel panel-default'>
						<div class='panel-heading'>
							<h4 class='text-center'>First Featured Post</h4>
						</div>
					
						<a href='{{route('blog.single', $posts[0]->slug)}}'>
						<div id='randomImage' class='img-opacity'
						 	style='background-image: url("{!! asset('images/' . $posts[0]->image_url) !!}");'>
						 	<div class='caption'>
						 		<h4 id='randomTitle'>{!! $posts[0]->title !!}</h4>
						 	</div>
						 </div>
						</a>	
					</div>	
					<div class='panel panel-default'>
						<div class='panel-heading'>
							<h4 class='text-center'>Second Featured Post</h4>
						</div>
					
						<a href='{{route('blog.single', $posts[1]->slug)}}'>
						<div id='randomImage' class='img-opacity'
						 	style='background-image: url("{!! asset('images/' . $posts[1]->image_url) !!}");'>
						 	<div class='caption'>
						 		<h4 id='randomTitle'>{!! $posts[1]->title !!}</h4>
						 	</div>
						 </div>
						</a>	
					</div>
				</div>
-->				
				<div id='randomFacts' class='col-md-4'>
					<div class='panel panel-info sharp-edges'>
						<div class='panel-heading'>
							<h4 class='text-center'>Randomly Selected Facts</h4>
						</div>
						<ul class='list-group'>
							<li class='list-group-item' style='//background-color: #6666ff;// border-color: #6666ff'>
								<p>{!! html_entity_decode($randomFacts[0]->fact) !!}</p>
							</li>
							<li class='list-group-item' style='//background-color: #ff6666; //border-color: #ff6666'>
								<p>{!! html_entity_decode($randomFacts[1]->fact) !!}</p>
							</li>
							<li class='list-group-item' style='//background-color: #66bb66; //border-color: #66bb66'>
								<p>{!! html_entity_decode($randomFacts[2]->fact) !!}</p>
							</li>														
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End of Random post-->

	<!--Thanks-->
	<div id='featuredPost' class='custom-contain'>
		<div class='container-fluid'>
			<h2 class='text-center'>Special Thanks</h2>
			<div class='row'>
				<div class='col-md-4'>
					<div class='panel panel-default sharp-edges'>
						<div class='panel-heading'>
							<h4>Sarah Kim</h4>
						</div>
						<img class='img-responsive' src='{{asset('images/thanks/sarah_kim3.jpg')}}'
								alt='Picture of Sarah Kim' />						
						<div class='panel-body'>
							<p>Sarah adores all things pretty, cute, and sweet. Plants, puppies,
								antiqued house decorations,..ice cream, you name it. I defer to her
								when it comes to the design and layout of the website. The website is
								still a reflection of my personality and style, but she tells me
								if something is really off!</p>
						</div>
					</div>
				</div>
				<div class='col-md-4'>
					<div class='panel panel-default sharp-edges'>
						<div class='panel-heading'>
							<h4>Lynda J Chan Photography</h4>
						</div>
						<img class='img-responsive' src='{{asset('images/thanks/lynda_chan.jpg')}}'
								alt='Picture of Lynda Chan' />						
						<div class='panel-body'>
							<p>Also known as my mother, she too has a detailed eye for all things 
								pretty, cute, and sweet. She has such a good eye, that she takes her
								camera everywhere.

								Many of the pictures I use in this blog are hers! So if you like them, 
								then check out her <a href='http://www.lyndajchan.com'>website!</a></p>
						</div>
					</div>
				</div>				
				<div class='col-md-4'>
					<div class='panel panel-default sharp-edges'>
						<div class='panel-heading'>
							<h4>Paul Loh</h4>
						</div>
						<img class='img-responsive' src='{{asset('images/thanks/paul_loh3.jpg')}}'
								alt='Picture of Paul Loh' />						
						<div class='panel-body'>
							<p>The best front-end developer and web designer I know. He helped me decide what
								tools to use for this project and with the deployment of
								this website.</p>
							<p>Check out his own website <a href='http://www.paulloh.com'>here!</a></p>
							<p>P.S. I took this picture.</p>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-4'>
					<div class='panel panel-default sharp-edges'>
						<div class='panel-heading'>
							<h4>DevMarketer</h4>
						</div>
						<img class='img-responsive' src='{{asset('images/thanks/dev_marketer2.jpg')}}'
								alt='Picture of DevMarketer Logo' />						
						<div class='panel-body'>
							<p>Also known as, jacurtis, a youtuber with great expertise on
								web development. He has uploaded several dozen tutorials, many of which
								I have watched and learned from. If you want to create your own website,
								then I recommend checking out his
								<a href='https://www.youtube.com/channel/UC6kwT7-jjZHHF1s7vCfg2CA'>
								youtube channel!</a></p>
						</div>
					</div>
				</div>												
			</div>
		</div>
	</div>
	<!--End of Thanks-->	

@stop



