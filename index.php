<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<!-- CSS + Icons-->
	<link rel="stylesheet" href="public/css/materialize.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="UTF-8">
	<title>HV</title>
</head>
<body>
	
	<header>
		 <nav class="teal" role="navigation">
			  <img src="public/images/logo.png" alt="" class="brand-logo  hide-on-med-and-down">
		      <ul class="right hide-on-med-and-down">
		        <li><a href="index.php">Accueil</a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">News<i class="material-icons right">arrow_drop_down</i></a></li>
		 		<li><a class="dropdown-button" href="#!" data-activates="dropdown2">A Propos<i class="material-icons right">arrow_drop_down</i></a></li>
		 		<li ><a href="index.php?page=tarifInscription">Inscription</a></li>
		 		<li ><a href="index.php?page=contact">Contact</a></li>
		 		<li ><a href="index.php?page=photo">Photo</a></li>
			  </ul>
			

		        
	       	  <ul id="dropdown1" class="dropdown-content">
				  <li><a href="index.php?page=actualite">Actualité</a></li>
				  <li><a href="index.php?page=evenement">Événement</a></li>
				  <li><a href="index.php?page=competition">Compétition</a></li>
			  </ul>
		        <ul id="dropdown2" class="dropdown-content">
				  <li><a href="index.php?page=presentation">Présentation</a></li>
				  <li><a href="index.php?page=association">Association</a></li>
				  <li><a href="index.php?page=horaire">Horaires</a></li>
				  <li><a href="index.php?page=clendrier">Calendrier</a></li>
				  <li><a href="index.php?page=reglement">Réglement Intérieur</a></li>
				  <li><a href="index.php?page=materiel">Matériel et Technique</a></li>

				</ul>

   
	
		      </ul>
			 <img src="public/images/logo.png" alt="" class="brand-logo1 hide-on-large-only">
		      <ul id="nav-mobile" class="side-nav">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="index.php?page=actualite">Actualités</a></li>
				<li><a href="index.php?page=evenement">Événements</a></li>
				<li><a href="index.php?page=competition">Compétitions</a></li>
				<li><a href="index.php?page=presentation">Présentation</a></li>
				<li><a href="index.php?page=association">Association</a></li>
				<li><a href="index.php?page=horaire">Horaires</a></li>
				<li><a href="index.php?page=clendrier">Calendrier</a></li>
				<li><a href="index.php?page=reglement">Réglement Intérieur</a></li>
				<li><a href="index.php?page=materiel">Matériel et Technique</a></li>
		      </ul>
		     <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		    </div>
		  </nav>
	</header>
	<div class="container">
		<div class="row">
			<?php
				require("private/routing.php");
			?>
			<!-- JS -->
			<script src="public/js/materialize.js"></script>
		</div>
	</div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l12 s12">
          <h5 class="white-text">Contact</h5>
          <p class="grey-text text-lighten-4">
			 4 bis chemin des écoles <br>
	   		 39120 LE DESCHAUX <br>
    		  cirylbernard@yahoo.fr <br>
    		   06 64 99 92 32 <br>
          </p>
          <p  class="white-text right-align">
          	<a class="white-text" href="index.php?controller=utilisateur&amp;action=signin">Connexion</a>	 
          </p>
        </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="#">délerium Palace</a>
      </div>
    </div>
  </footer>

            
	<script src="public/js/jquery-3.1.1.min.js"></script>
	<script src="public/js/materialize.min.js"></script>
	<script>
		
		$( document ).ready(function() {
		    $('.carousel.carousel-slider').carousel({full_width: true});
			$('.button-collapse').sideNav();
			$(".dropdown-button").dropdown();
    		$('select').material_select();
    		$('.datepicker').pickadate({selectMonths: true, selectYears: true, selectYears: 100});
		});
	</script>
</body>
</html>


