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
    /*body{
    	position: relative;
    }
    .sidebar {
    	border-right: 1px solid black;
    }

    nav, footer {
    	background-color: #232f3e;
    }

    .back-to-top,
    .main-header {
    	text-align: center;
    }

    footer,
    footer a {
    	color: white;
    }


    .main, .sidebar {
    	height: 900px;
    }

    .banner img {
    	width: 100%;
    	margin: auto;
    }
    h1 {
    	font-size: 1em;
    }

    select{
    	display: block;
    }

    .main-content div img {
    	width: 100%;
    }

    img {
    	width: 100px;
    }

    @media only screen and (max-width: 600px) {
    	.sidebar {
    		display: hidden;
    		height: auto;
    	}

    	.main {
    		height: auto;
    	}
    }*/
    
    </style>
</head>
<body>


	<header>
			<?php require_once('partials/nav.php'); ?>
	</header>

	<div>
		<div class="row">
		<div class="col s12 m2 l2 sidebar">
			<ul>
				<li><a href="#">Mario</a></li>
				<li><a href="#">Legend of Zelda</a></li>
				<li><a href="#">Final Fantasy</a></li>
				<li><a href="#">Tekken</a></li>
			</ul>
		</div>
		<div>
			<?php display_content(); ?>
		</div>
		
	</div>
	
	

	<footer>
		<?php require_once('partials/footer.php'); ?>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>

