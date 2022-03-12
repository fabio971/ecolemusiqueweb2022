<?php
	include '../../model/class/Utilisateur.php';
	include '../../model/manager/ManagerUtilisateur.php';

	$manager = new ManagerUtilisateur();
	$utilisateur = new Utilisateur("",
	        					   $_POST['pseudo'], 
	                               "", 
	                               "", 
	                               "",
	                               $_POST['mdp']);

	if ($manager->existe($utilisateur)) {
		echo '<meta http-equiv="refresh" content="0; URL=../../?rubrique=bienvenue&operation=bienvenue" />';
	}
	else
	{

	}
?>