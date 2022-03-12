<?php
	include "../../model/class/ConnectionDB.php";
	
	class ManagerUtilisateur
	{
        private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}

	   	public function existe($utilisateur)
        {
            $requete = "select count(*) as quantite 
                        from utilisateur 
                        where pseudo = :pseudo 
                        and mot_de_passe = :mdp";

            $reponse = $this->db->getDB()->prepare($requete);

            $reponse->bindValue('pseudo', $utilisateur->getPseudo(), PDO::PARAM_STR);
            $reponse->bindValue('mdp', $utilisateur->getMdp(), PDO::PARAM_STR);

            $reponse->execute();

            $donnees = $reponse->fetch(PDO::FETCH_OBJ);

            /*echo '<pre>';
                print_r($donnees);
            echo '</pre>';*/

            $trouve = ($donnees->quantite != 0) ? true : false;

            return $trouve;
        }
	}
?>