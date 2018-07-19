<?php

class crud
{
	private $DB_host = "localhost";
	private $DB_user = "andre128_klik";
	private $DB_pass = "(zlgChi~R,#]";
	private $DB_name = "andre128_klik";

	function __construct()
	{
		
	}
	
	public function create($user_id,$name,$code)
	{
		try
		{
			$mysqli = new mysqli($this->DB_host, $this->DB_user, $this->DB_pass, $this->DB_name);

			if ($mysqli->connect_errno) {
				return $mysqli->connect_error;
			}
		
			/*$query = sprintf("SELECT * FROM users WHERE login = '".$login."'");
			if ($result = $mysqli->query($query)) {
				if(count($result->fetch_assoc()) > 0)
				{
					$result->free();
					throw new Exception('User already exist!');
				}
			}
		
			$query = sprintf("INSERT INTO users (id,login,password,password2,nick,balance,status,timestamp,account_id,active) VALUES (NULL,'".$login."','".$password."','".$password2."','".$nick."',0,NULL,NULL,'".$game_id."',1)");
			$result = $mysqli->query($query);

			$query = sprintf("SELECT * FROM users WHERE login = '".$login."'");
		
			if ($result = $mysqli->query($query)) {
				$row = $result->fetch_assoc();
				$result->free();
			}
			$mysqli->close();*/
			return "All OK from Repo!!";
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
}
