<?php

switch($action)
{
	case 'login':
		include('public/page/connexion/connexion.php');
	break;
	default:
		include('public/page/accueil.php');
	break;
}