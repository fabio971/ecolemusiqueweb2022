<?php
	/**
	 * 
	 */
	class ConnectionDB
	{
		private $db;
		private $sgdbr;
		private $host;
		private $dbname;
		private $user;
		private $password;

		public function __construct()
		{
			$this->sgdbr = 'pgsql';
			$this->host = 'localhost';
			$this->dbname = 'ecole_musique_pg';
			$this->user = 'fabian';
			$this->password = 'fenestros';

			try
			{
				// $this->db = new PDO("pgsql:host=localhost;dbname=ecolemusique", 'fabian', 'fenestros');
				$this->db = new PDO("{$this->getSGDBR()}:host={$this->getHost()};
				  	dbname={$this->getDBName()}",
				$this->getUser(),
				$this->getPassword());
			}
			catch (PDO_Exception $e)
			{
				echo $e->getMessage();
			}
		}

		public function getDB()
		{
			return $this->db;
		}

		public function getSGDBR()
		{
			return $this->sgdbr;
		}

		public function getHost()
		{
			return $this->host;
		}

		public function getDBName()
		{
		return $this->dbname;
		}

		public function getUser()
		{
		return $this->user;
		}

		public function getPassword()
		{
		return $this->password;
		}
	}
?>