<?php

	class Conexion{
		private $host = "localhost";  //Servidor  DB
		private $user = "root";		  //Usuario de la DB
		private $password = "";		  //Pass del usuario de la DB
		private $db = "db_sistema";   //Base de datos
		private $connect;

		public function __construct(){
			$connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
			try {
				$this->connect = new PDO($connectionString,$this->user,$this->password);
				$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "<b><font color='green'>Se establecio la conexión con la base de datos";
			} catch (Exception $e){
				$this->connect ='Error de conexión';
				//echo "ERROR: <b><font color='red'>". $e->getMessage();
			}

		}

			public function connect()
			{
				return $this->connect;
			}
	}

?>