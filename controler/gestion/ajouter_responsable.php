<?php
	include '../../model/class/Responsable.php';
	include '../../model/manager/ManagerResponsable.php';

	// Si on vient du formulaire
	if (isset($_POST['verification']) && 
		$_POST['verification'] == "O_K") 
	{
		$responsable = new Responsable($_POST["id_utilisateur"],
									   $_POST["pseudo"],
									   $_POST["nom"],
									   $_POST["prenom"],
									   $_POST["tel_cel"],
									   $_POST["mot_de_passe"],
		                               $_POST["num_adresse_resp"],
		                               $_POST["rue_adresse_resp"],
		                               $_POST["cp"],
		                               $_POST["tel_fixe_responsable"]);

		$manager_responsable = new ManagerResponsable();
		$manager_responsable->insert($responsable);

		unlink("../../model/temp/codepostaux.xml");

		//echo '<meta http-equiv="refresh" content="10;URL=../../?rubrique=bienvenue&operation=bienvenue">';
	}
	else
	{
		// Si on vient du menu
		copy("../../model/xmls/codepostaux.xml", "../../model/temp/codepostaux.xml");

		// "Appel" à la View
		echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=gestion&operation=ajouter_responsable">';
	}
?>