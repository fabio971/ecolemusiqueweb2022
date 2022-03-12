<?php
	/**
	 * 
	 */
	class Utilisateur
    {
        private $id;
        private $pseudo;
        private $nom;
        private $prenom;
        private $tel;
        private $mdp;
        
        public function __construct($id,
                					 $pseudo, 
                                     $nom, 
                                     $prenom, 
                                     $tel,
                                     $mdp)
        {
            $this->id = $id;
            $this->pseudo = $pseudo; 
            $this->nom = $nom; 
            $this->prenom = $prenom; 
            $this->tel = $tel;
            $this->mdp = $mdp;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setPseudo($pseudo)
        {
            $this->pseudo = $pseudo;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        public function setMdp($mdp)
        {
            $this->mdp = $mdp;
        }

        public function setTel($tel)
        {
            $this->tel = $tel;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getPseudo()
        {
            return $this->pseudo;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getMdp()
        {
            return $this->mdp;
        }

        public function getTel()
        {
            return $this->tel;
        }
    }

?>