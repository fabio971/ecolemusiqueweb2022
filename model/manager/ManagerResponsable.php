<?php
	include "../../model/class/ConnectionDB.php";

	class ManagerResponsable
	{
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}

	   	public function insert($responsable)
	   	{
	   		$requete = "insert into utilisateur values (:id, :nom, :prenom, :tel, :pseudo, :mdp)";
	   		
	   		$reponse = $this->db->getDB()->prepare($requete);
	   			
	   		echo $reponse->bindValue('id', $responsable->getId(), PDO::PARAM_STR);
	   		echo $reponse->bindValue('nom', $responsable->getNom(), PDO::PARAM_STR);
	   		echo $reponse->bindValue('prenom', $responsable->getPrenom(), PDO::PARAM_STR);
	   		echo $reponse->bindValue('tel', $responsable->getTel(), PDO::PARAM_STR);
	   		echo $reponse->bindValue('pseudo', $responsable->getPseudo(), PDO::PARAM_STR);
	   		echo $reponse->bindValue('mdp', $responsable->getMdp(), PDO::PARAM_STR);

	   		/*$reponse->execute(array('id' => $responsable->getId(),
	   								'nom' => $responsable->getNom(),
	   							    'prenom' => $responsable->getPrenom(),
	   							    'tel' => $responsable->getTel(),
	   							    'pseudo' => $responsable->getPseudo(),
	   							    'mdp' => $responsable->getMdp()));	*/
	   		$reponse->execute();
		   		/*if ($reponse->execute())
		   		{

		   			echo "responsable";
		   			$requete = "insert into responsable values (:id, :numr, :rue, :cp, :telf)";

			   		$reponse = $this->db->getDB()->prepare($requete);

			   		$reponse->bindValue('id', $responsable->getId(), PDO::PARAM_STR);
			   		$reponse->bindValue('numr', $responsable->getNum_adresse_resp(), PDO::PARAM_STR);
			   		$reponse->bindValue('rue', $responsable->getRue_adresse_resp(), PDO::PARAM_STR);
			   		$reponse->bindValue('cp', $responsable->getCp(), PDO::PARAM_STR);
			   		$reponse->bindValue('telf', $responsable->getTel_fixe_responsable(), PDO::PARAM_STR);

			   		$reponse->execute();

			   		return true;
		   		}
		   		else
		   			return false;*/
	   	}
	}
?>