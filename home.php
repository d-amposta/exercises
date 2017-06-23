<!DOCTYPE html>
<html>
<head>
	<title><?php get_title(); ?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        img{
            width: 100%;
        }
    </style>
</head>
<body>


	<header>
			<?php require_once('partials/nav.php'); ?>
	</header>

	<div class="container">
		<!-- <div class="row">
		<div class="col col-s12 col-m2 col-l2 sidebar">
			<ul>
				<li><a href="#">Mario</a></li>
				<li><a href="#">Legend of Zelda</a></li>
				<li><a href="#">Final Fantasy</a></li>
				<li><a href="#">Tekken</a></li>
			</ul>
		</div> -->
		<div>
			<?php display_content(); ?>
		</div>
		
	</div>
	
	

	<footer>
		<?php require_once('partials/footer.php'); ?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

