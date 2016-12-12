<?php

$user = new Utilisateur();
$connectUser = new UtilisateurPdo();

switch($action)
{

	case 'signin':
		include('public/page/utilisateur/login.html');
	break;
	
	case "login":
		$user->setLogin($_POST['login']);
		$user->setMdp($_POST['password']);
		$utilisateur = $connectUser->show($user);
		if(!is_null($utilisateur->getId()))
		{
			$_SESSION['user'] = $utilisateur;
			header('location: admin.php');
		}
		else
		{
			$_SESSION['message_error'] = "Login ou mot de passe incorrect";
			header('location: index.php?controller=utilisateur&action=signin');
		}
	break;

	case "logout":
		if(isset($_SESSION['user']))
		{
			session_destroy();
			header('location: index.php'); 
		}
			
		else
		{
			header('location: index.php');;
		}

	break;

	case "edit":
		include('public/page/utilisateur/edit.php');
	break;

	case "update":
		echo $_POST['password'];
	break;

}