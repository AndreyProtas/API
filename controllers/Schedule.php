<?php
include_once "ScheduleRepository.php";

class Schedule
{
	private $_params;
	private $_crud;
 
   public function __construct($params, $crud)
   {
      $this->_params = $params;
	  $this->_crud = new crud();
   }
 
   public function createAction()
   {
		$subject = $this->_params['subject'];
		$startdate = $this->_params['startdate'];
		$duration = $this->_params['duration'];
		$schedule = $this->_params['schedule'];
		$amount = $this->_params['amount'];
   
		$lesson_counter = 0;
		$week = 0;
		$lessons = array();
		while ($lesson_counter < $amount){
			foreach ($schedule as &$value) 
			{
				$lesson_counter++;
				$lessonDate = strtotime($value .' + '. $week * 7 .' days');
				$lessons[$lesson_counter] = new DateTime(date('m/d/Y h:i:s',$lessonDate));
				if($lesson_counter == $amount) break;
			}
			$week++;
		}
   
		//$success = $this->_crud->create($user_id,$name,$code);
		foreach ($lessons as &$lesson) {
			echo "Lesson will start ".$lesson->format('Y-m-d h:i:s')." and end ".$lesson->add(new DateInterval('PT'.$duration.'M'))->format('Y-m-d h:i:s')." <br>";
		}
		$success = $success + strtotime($value .' + 1 days');
		return date('m d Y h:i:s',$success);
   }
}