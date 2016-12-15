<?php

$statut = new Statut();
$statutConnect = new StatutPdo();

switch($action)
{
	case "getall":
		$lesStatuts = $statutConnect->getall();
		include('public/page/statut/getall.php');
	break;

	case "show":
		$id = isset($_GET['id']) ? (int) $_GET['id'] : null ;
		if($id > 0)
		{
			$unStatut = $statutConnect->show($id);
			var_dump($unStatut);
		}
		else
		{
			header('location: admin.php?controller=statut&action=getall');
		}
	break;

	case "create":
		include('public/page/statut/create.php');
	break;

	case "store":
		$statut->setIntitule($_POST['intitule']);
		$verif = $statutConnect->create($statut);
		if($verif != 1)
		{
			$_SESSION['message_error'] = 'Oops !';
			header('location: admin.php?controller=statut&action=create');
		}
		else
		{
			header('location: admin.php?controller=statut&action=getall');
		}
	break;

	case "edit":
		$id = isset($_GET['id']) ? (int) $_GET['id'] : null ;
		if($id > 0)
		{
			$unStatut = $statutConnect->show($id);
		}
		else
		{
			header('location: admin.php?controller=statut&action=getall');
		}

		include('public/page/statut/edit.php');
	break;




	case 'update':
		$id = isset($_GET['id']) ? (int) $_GET['id'] : null ;
		if($id > 0)
		{
			$unStatut = $statutConnect->show($id);
		}
		else
		{
			header('location: admin.php?controller=statut&action=getall');
		}
		$statut->setId($id);
		$statut->setIntitule($_POST['intitule']);
		$verif = $statutConnect->update($statut);
		if($verif != 1)
		{
			$_SESSION['message_error'] = 'Oops !';
			header('location: admin.php?controller=statut&action=create');
		}
		else
		{
			header('location: admin.php?controller=statut&action=getall');
		}
	break;

	case "delete":
		$id = isset($_GET['id']) ? (int) $_GET['id'] : null ;
		if($id > 0)
		{
			$verif = $statutConnect->delete($id);
			if($verif != 1)
			{
				$_SESSION['message_error'] = 'Oops !';
				header('location: admin.php?controller=statut&action=create');
			}
			else
			{
				header('location: admin.php?controller=statut&action=getall');
			}
		}
		else
		{
			header('location: admin.php?controller=statut&action=getall');
		}
	break;

}