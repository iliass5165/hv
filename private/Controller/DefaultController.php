<?php

switch($action)
{
	
	default:

			if(!isset($_SESSION['user']))
			{
				include('public/page/accueil.php');
			}
			else
			{
				echo "helko";
			}

	break;
}