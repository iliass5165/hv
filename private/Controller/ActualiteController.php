<?php

switch($action)
{

	case "show":

	break;

	case "getall":
		if(!isset($_SESSION['user']))
		{
			include("public/page/actualite/getall.php");
		}
		else
		{
			echo 'hello';
		}
	break;

	case "create":
	
	break;
	
	case "store":
	break;
	

	case "edit":
	break;

	case "update":
	break;

	case "delete":
	break;

	default:

	break;

}