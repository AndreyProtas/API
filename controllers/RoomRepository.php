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
	
	public function get()
	{
		try
		{
			$mysqli = new mysqli($this->DB_host, $this->DB_user, $this->DB_pass, $this->DB_name);
			
			if ($mysqli->connect_errno) {
				return $mysqli->connect_error;
			}
		
			$query = "SELECT * FROM rooms";
			
			if ($result = $mysqli->query($query)) {
				$rows = array();
				while ($row = $result->fetch_assoc()) {
					$rows[] = $row;
				}
					
				$result->free();
			}

			$mysqli->close();
			
			return $rows;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function getCalendar($roomId)
	{
			$mysqli = new mysqli($this->DB_host, $this->DB_user, $this->DB_pass, $this->DB_name);
			
			if ($mysqli->connect_errno) {
				return $mysqli->connect_error;
			}
		
			$query = "SELECT * FROM room_schedules where RoomId = ".$roomId;
			
			if ($result = $mysqli->query($query)) {
				$rows = array();
				while ($row = $result->fetch_assoc()) {
					$rows[] = $row;
				}
					
				$result->free();
			}

			$mysqli->close();
			
			return $rows;
	}
}
