<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- CSS -->
	<link rel="stylesheet" href="public/css/materialize.css">
	<meta charset="UTF-8">
	<title>HV</title>
</head>
<body>
	

<?php 
	if (isset($_GET['page']))
	
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
	?>
	<!-- JS -->
	<script src="public/js/materialize.js"></script>
</body>
</html>


