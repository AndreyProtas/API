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
	
	public function create($groupId, $subjectId, $startdate, $startdate, $duration, $schedule, $amount)
	{
		try
		{
			//Based on Weekly schedule create lesson list
			$lesson_counter = 0;
			$week = 0;
			$lessons = array();
			while ($lesson_counter < $amount){
				foreach ($schedule as &$value) 
				{
					$lesson_counter++;
					$lessonDate = strtotime($value .' + '. $week * 7 .' days');
					$lessons[$lesson_counter] = new DateTime(date('m/d/Y H:i:s',$lessonDate));
					if($lesson_counter == $amount) break;
				}
				$week++;
			}
		}
		catch(Exception $e)
		{
			throw new Exception("Cannot create requested lessons list!");
		}
		
		try
		{
			$mysqli = new mysqli($this->DB_host, $this->DB_user, $this->DB_pass, $this->DB_name);

			if ($mysqli->connect_errno) {
				return $mysqli->connect_error;
			}
			
			foreach ($lessons as &$lesson) {
	
				$lessonStartDate = $lesson->format('Y-m-d H:i:s');
				$lessonEndDate = $lesson->add(new DateInterval('PT'.$duration.'M'))->format('Y-m-d H:i:s');
			
				$parameters = true;
				$parameters |= $mysqli->query("SET @lessonStartDate =  '".$lessonStartDate."';");
				$parameters |= $mysqli->query("SET @lessonEndDate =  '".$lessonEndDate."';");
				$parameters |= $mysqli->query("SET @subjectId =  '".$subjectId."';");
				$parameters |= $mysqli->query("SET @groupId =  '".$groupId."';");

				if($parameters == false){
					echo "Parameters were not created!";
					return false;
				}
				
				$callResult = $mysqli->query("CALL `GetScheduleByDate` (@lessonStartDate , @lessonEndDate , @subjectId , @groupId , @teacherId , @roomId , @isBusy);");
				if($callResult == false){
					echo "Call Failed!" . $mysqli->errno . ") " . $mysqli->error;
					return false;
				}
			
				$query = sprintf("SELECT @teacherId AS  `teacherId` , @roomId AS  `roomId` , @isBusy AS  `isGroupBusy` ;");
			
				if ($result = $mysqli->query($query)) {
					$row = $result->fetch_assoc();
					$result->free();
				}
				$roomText = $row["roomId"];
				if($row["roomId"] == '0')
					$roomText = "<strong>No Room!</strong>";
				
				$teacherText = $row["teacherId"];
				if($row["teacherId"] == '0')
					$teacherText = "<strong>No Teacher!</strong>";
				
				echo "Lesson for Group $groupId will Start at $lessonStartDate and End at $lessonEndDate in room $roomText and hosted by teacherid $teacherText<br>";
			}
			
			$mysqli->close();
			return "OK!";
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}
}
