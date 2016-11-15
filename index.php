<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<!-- CSS + Icons-->
	<link rel="stylesheet" href="public/css/materialize.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="UTF-8">
	<title>HV</title>
</head>
<body>
	
	<header>
		 <nav class=" light-green accent-3 lighten-1" role="navigation">
		      <ul class="right hide-on-med-and-down">
		        <li><a href="#">Navbar Link</a></li>
		      </ul>

		      <ul id="nav-mobile" class="side-nav">
		        <li><a href="#">Navbar Link</a></li>
		      </ul>
		     <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		    </div>
		  </nav>
	</header>
	<div class="container">
		<div class="row">
		<?php 
			if (isset($_GET['page']))
			{
				$page= $_GET['page'];
				switch ($page) 
				{

						case 'accueil':
						
							include('public/page/accueil.php');

							break;
						case 'actualite':

							include('public/page/actualite.php');

						break;

						case 'evenement':
						
							include('public/page/evenement.php');

						break;

						case 'competition':
						
							include('public/page/competition.php');

						break;
						case 'presentation':
						
							include('public/page/presentation.php');

						break;

						case 'association':
						
							include('public/page/association.php');
							
							break;

							case 'horaire':
						
							include('public/page/horaire.php');

							break;

							case 'calendrier':
						
							include('public/page/calendrier.php');

							break;

							case 'reglement':
						
							include('public/page/reglement.php');
							break;

							case 'evenement':
						
							include('public/page/evenement.php');

							break;

							case 'materiel':
						
							include('public/page/materiel.php');

							break;

							case 'technique':
						
							include('public/page/technique.php');

							break;
						
							case 'tarifInscription':
						
							include('public/page/tarifInscription.php');

							break;

							case 'contact':
						
							include('public/page/contact.php');

							break;

							case 'photo':
						
							include('public/page/photo.php');

							break;
						
						
						default:
						
							include('public/page/accueil.php');
							
							break;
					}	
			}
			else
			{
				include('public/page/accueil.php');
			}
			?>
			<!-- JS -->
			<script src="public/js/materialize.js"></script>
		</div>
	</div>
	<script src="public/js/jquery-3.1.1.min.js"></script>
	<script src="public/js/materialize.min.js"></script>
	<script>
		
		$( document ).ready(function() {
		    $('.carousel.carousel-slider').carousel({full_width: true});
			$('.button-collapse').sideNav();
		})
	</script>
</body>
</html>


