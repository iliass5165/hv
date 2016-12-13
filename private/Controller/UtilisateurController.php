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
		$user->setMdp(sha1($_POST['password']));

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
			header('location: index.php');
		}

	break;

	case "edit":
		if(isset($_SESSION['user']))
		{
			if(!empty($_POST))
			{
				$user = fixObject($_SESSION['user']);
				$old = sha1($_POST['old']);
				$new = sha1($_POST['new']);
				$confirm = sha1($_POST['confirm']);

				if($user->getMdp() != $old)
				{
					$_SESSION['message_error'] = "Veuillez verifier l'ancien mot de passe que vous avez tape.";
				}
				elseif($confirm != $new)
				{
					
					$_SESSION['message_error'] = "Veuillez verifier le nouveau mot de passe et sa confirmation.";
				}
				else
				{



					$user->setMdp($new);
					$_SESSION['user'] = $user;
					$connectUser->edit($user);

					$_SESSION['message_success'] = "Votre mot de passe a été bien modifié.";
				}

				
			}
			
			include('public/page/utilisateur/edit.php');
		}
			
		else
		{
			header('location: index.php');
		}
	break;


}



function fixObject (&$object)
{
  if (!is_object ($object) && gettype ($object) == 'object')
    return ($object = unserialize (serialize ($object)));
  return $object;
}