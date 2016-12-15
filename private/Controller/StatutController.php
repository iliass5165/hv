<?php

$statut = new Statut();
$statutConnect = new StatutPdo();

switch($action)
{
	case "getall":
		$lesStatuts = $statutConnect->getall();
		include('public/page/statut/getall.php');
	break;

	case "create":
	break;

	case "show":
	break;

	case "store":
	break;

	case "update":
	break;

	case "delete":
	break;

}