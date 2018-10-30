<?php 
	
	class Connection
	{
		
		public static function make($dbName){
			try{
				$pdo=new PDO("mysql:host=localhost;dbname=".$dbName.";charset=utf8;","root","");
				return $pdo;
			}
			catch(PDOexception $e){
				echo $e->getMessage();
			}
		}
	}

	class queryBuilder
	{
		protected $conn;
		protected $token;
		protected $tableName;
		function __construct($conn,$token,$tableName)
		{
			$this->conn=$conn;
			$this->token=$token;
			$this->tableName=$tableName;
		}
		function createToken(){
			$statement=$this->conn->prepare("INSERT INTO $this->tableName(token) VALUES('$this->token')");
			$statement->execute();
		}
	}