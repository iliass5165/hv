<?php

switch($action)
{
	case 'login':
		include('public/page/utilisateur/login.html');
	break;
	default:
		include('public/page/accueil.php');
	break;
}