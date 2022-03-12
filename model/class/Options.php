<?php
	/**
	 * 
	 */
	class Options
	{
		// ATTRIBUTS
		private $id;
		private $libelle;
		private $lien;


		// CONSTRUCTEUR
		public function __construct($id, $libelle, $lien)
		{
			$this->id = $id;
			$this->libelle = $libelle;
			$this->lien = $lien;
		}


		// SETTERS
		public function setId($id)
		{
			$this->id = $id;
		}

		public function setLibelle($libelle)
		{
			$this->libelle = $libelle;
		}

		public function setLien($lien)
		{
			$this->lien = $lien;
		}


		// GETTERS
		public function getId()
		{
			return $this->id;
		}

		public function getLibelle()
		{
			return $this->libelle;
		}

		public function getLien()
		{
			return $this->lien;
		}
	}
?>