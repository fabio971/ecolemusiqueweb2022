<form method="post" action="controler/gestion/ajouter_responsable.php">
	<input type="hidden" name="verification" value="O_K">
	Id.Utilisateur : <input type="text" name="id_utilisateur"><br>
	Nom : <input type="text" name="nom" required><br>
	Prenom : <input type="text" name="prenom" required><br>
	Tél. cel : <input type="tel" placeholder = "0690-XXX-XXX"pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" name="tel_cel" required><br>
	Tél. fixe : <input type="tel" placeholder = "0590-XXX-XXX"pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" name="tel_fixe_responsable" required><br>
	Pseudo : <input type="text" name="pseudo" required><br>
	Mot de passe : <input type="password" name="mot_de_passe" required><br>
	Confirmation de mot de passe : <input type="password" name="mot_de_passe2" required><br>
	No. adresse : <input type="number" name="num_adresse_resp" required><br>
	Rue : <input type="text" name="rue_adresse_resp" required><br>
	<?php
		if (file_exists("model/temp/codepostaux.xml"))
		{
			$codepostaux = array();

		    $lescodepostaux = simplexml_load_file('model/temp/codepostaux.xml');

		    foreach ($lescodepostaux->row as $row) {        
		    	$codepostaux[] = array('cp' => utf8_decode($row->id),
		                        	   'nomville' => utf8_decode($row->nomville));
		    }
		}
	?>
	Code postal : 
	<select name="cp">
		<?php
			foreach ($codepostaux as $cp) {
		?>
			<option value="<?php echo $cp['cp']?>"><?php echo $cp['nomville']?></option>
		<?php
			}
		?>
	</select><br><br>
	<input type="submit" name="Envoyer">
</form>