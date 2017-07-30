<?php include 'common/session.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
	
	<!--Meta Tags-->
	<meta charset='utf-8'>
	
	<!--CSS-->
	<link href='/dist-3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='assets/style.css?version=2' rel='stylesheet'>
	
	<?php include "common/scripts.php" ?>
</head>
<body>

	<?php render('common/_navigation'); ?>
	
	<!--Content Start-->

	<!--Comments-->
	<div id='comments' class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>Comments</h1>
				</div>
				<div class='col-md-6'>					
					<h3>Add Your Own Comment!</h3>
					<form action='' method='get'>
						<input id='comment' name='comment' type='hidden'/> <!--not digging this solution -->
						<div class='form-group'>
							<label for='name'>Name: </label>
							<input id='name' name='name' type='text' class='form-control'/>
						</div>
						<div class='form-group'>
							<label for='commentText'>Comment: </label>
							<textarea id='commentText' name='commentText' rows='3' class='form-control'></textarea>
						</div>
						<button type='Submit' class='btn btn-primary'>Submit Comment!</button>
					</form>
				</div>
				<div class='clearfix'></div>
				<div class='col-md-12'>
						<h3>Comment Section</h3>
						<ul class='list-unstyled'>
							<?php render($comments); ?>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<!--End of Comments-->

	<!--Content End-->
	
	<?php render('common/_footer') ?>
</body>
</html>