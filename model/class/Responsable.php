<?php
	/**
	 * 
	 */
	include 'Utilisateur.php';

	class Responsable extends Utilisateur
	{
		private $num_adresse_resp;
		private $rue_adresse_resp;
		private $cp;
		private $tel_fixe_responsable;
		
		public function __construct($id,
        					 $pseudo, 
                             $nom, 
                             $prenom, 
                             $tel,
                             $mdp, 
							 $num_adresse_resp,
							 $rue_adresse_resp,
							 $cp,
							 $tel_fixe_responsable)
		{
			parent::__construct($id,
	        					 $pseudo, 
	                             $nom, 
	                             $prenom, 
	                             $tel,
	                             $mdp);

			$this->num_adresse_resp = $num_adresse_resp;
			$this->rue_adresse_resp = $rue_adresse_resp;
			$this->cp = $cp;
			$this->tel_fixe_responsable = $tel_fixe_responsable;
		}

		public function setNum_adresse_resp($num_adresse_resp)
		{
			$this->num_adresse_resp = $num_adresse_resp;
		} 
		
		public function setRue_adresse_resp($rue_adresse_resp)
		{
			$this->rue_adresse_resp = $rue_adresse_resp;
		} 
		
		public function setCp($cp)
		{
			$this->cp = $cp;
		} 
		
		public function setTel_fixe_responsable($tel_fixe_responsable)
		{
			$this->tel_fixe_responsable = $tel_fixe_responsable;
		} 

		public function getNum_adresse_resp()
		{
			return $this->num_adresse_resp;
		} 
		
		public function getRue_adresse_resp()
		{
			return $this->rue_adresse_resp;
		} 
		
		public function getCp()
		{
			return $this->cp;
		} 
		
		public function getTel_fixe_responsable()
		{
			return $this->tel_fixe_responsable;
		} 
	}
?>