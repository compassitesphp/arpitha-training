<?php

   //public 
	$servernmae="localhost";
   //public
    $username="arpitha";
   //public
    $password="compass";
   //public 
    $dbname="employee";



	//establishing the connection
	public function __construct($servername,$username,$passward,$dbname)
	{

		$this->$servername=$servername;
		$this->username=$username;
		$this->passward=$passward;
		$this->dbname=$dbname;

	}	

	public function connect()
	{
		$conn= new mysql($this->servername,$this->username,$this->passward,$this->dbname);
		if($conn->connect_error)
		{

			die("connection failed".$conn->connect_error);
		}
		return $conn;
	}
?>
