<?php 
if (isset($_GET['controller']))
{
	$controller= $_GET['controller'];
	$action = $_GET['action'];
	
	switch ($controller) 
	{

			case 'actualite':

				include('private/Controller/ActualiteController.php');

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

		
			case 'tarifInscription':
		
			include('public/page/tarifInscription.php');

			break;

			case 'contact':
		
			include('public/page/contact.php');

			break;

			case 'photo':
		
			include('public/page/photo.php');

			break;
			
			case 'concours':
		
			include('public/page/concours.php');

			break;

			case 'compet':
		
			include('public/page/compet.php');

			break;

			case 'showactualite';

			include('public/page/showactualite.php');

			break;

			case 'materiel';

			include('public/page/materiel&technique.php');

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
