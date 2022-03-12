<?php
	/**
	 * model/manager/ManagerMenu.php
	 */
	include 'model/class/Options.php';
	include "model/class/ConnectionDB.php";

	class ManagerMenu
	{
		
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}

	   	public function get()
	   	{
	   		try {
	   			$requete = "select m.id_option as id_option_r, m.libelle_option as rubrique, op.id_option as id_option_o, op.libelle_option as option, lien
                            from (select libelle_option, id_option, c.id_option_o       
         from options o
         inner join comporte c on c.id_option_m = o.id_option) as m
                            inner join options op on m.id_option_o = op.id_option where lien <> '' order by id_option_r";

		   		$reponse = $this->db->getDB()->query($requete);
	   			
	   		} catch (Exception $e) {
	   			echo $e->getMessage();
	   		}
		   		

	   		$menu = array();

	   		while ($donnees = $reponse->fetch()) 
	   		{
	   			$menu[] = array('rubrique' => $donnees["rubrique"], 
	   							'option' => new Options($donnees["id_option_o"], 
	   								$donnees["option"], 
	   								$donnees["lien"]));
	   		}
	   		/*echo '<pre>';
	   		print_r($menu);
	   	echo '</pre>';*/
	   	

	   		return $menu;
	   	}
	}
?>




<?php 
/*
		echo '<pre>';
	   		print_r($menu);
	   	echo '</pre>';


		Array
		(
		    [0] => Array
		        (
		            [menu] => MENU1
		            [option] => Options Object
		                (
		                    [id:Options:private] => 3
		                    [libelle:Options:private] => M1O2
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [1] => Array
		        (
		            [menu] => MENU1
		            [option] => Options Object
		                (
		                    [id:Options:private] => 4
		                    [libelle:Options:private] => M1O3
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [2] => Array
		        (
		            [menu] => MENU1
		            [option] => Options Object
		                (
		                    [id:Options:private] => 6
		                    [libelle:Options:private] => M1O5
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [3] => Array
		        (
		            [menu] => MENU2
		            [option] => Options Object
		                (
		                    [id:Options:private] => 5
		                    [libelle:Options:private] => M2O4
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [4] => Array
		        (
		            [menu] => MENU3
		            [option] => Options Object
		                (
		                    [id:Options:private] => 8
		                    [libelle:Options:private] => M3O1
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [5] => Array
		        (
		            [menu] => MENU3
		            [option] => Options Object
		                (
		                    [id:Options:private] => 9
		                    [libelle:Options:private] => M3O2
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [6] => Array
		        (
		            [menu] => MENU3
		            [option] => Options Object
		                (
		                    [id:Options:private] => 10
		                    [libelle:Options:private] => M3O3
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		)
	   	*/
?>


















<?php
	   	/*
	   	public function getAll()
	   	{
	    	$requete = "select * from membre order by nom ASC";
	       $reponse = $this->_db->getDB()->query($requete);

	       $membres = array();
	       
	       while ($donnees = $reponse->fetch())
	       {
	        $membres[] = array("id" => $donnees["id"],
	          "autres_donnees" => new Membre($donnees["nom"], $donnees["prenom"],
	           $donnees["num_adr"],
	           $donnees["rue_adr"],
	           $donnees["mail"],
	           $donnees["mobile"],
	           $donnees["mdp"],
	           $donnees["id_cp"]));
	       }
	       return $membres;
	   }

	   public function insert($nom,
	      $prenom,
	      $num_adr,
	      $rue_adr,
	      $cp,
	      $mail,
	      $mobile,
	      $mdp)
	   {
	    try {
	    $requete = "insert into membre (nom,
	    prenom,
	    num_adr,
	    rue_adr,
	    id_cp,
	    mail,
	    mobile,
	    mdp)
	    values (:nom,
	    :prenom,
	    :num_adr,
	    :rue_adr,
	    :cp,
	    :mail,
	    :mobile,
	    :mdp)";

	    $reponse = $this->_db->getDB()->prepare($requete);

	   $reponse->execute(array('nom' => $nom,
	    'prenom' => $prenom,
	    'num_adr' => $num_adr,
	    'rue_adr' => $rue_adr,
	    'cp' => $cp,
	    'mail' => $mail,
	    'mobile' => $mobile,
	    'mdp' => $mdp));    
	    } catch (Exception $e) {
	    echo $e->getMessage();
	    }
		}*/
	
?>