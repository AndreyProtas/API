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
		$subjectId = $this->_params['subjectId'];
		$startdate = $this->_params['startdate'];
		$duration = $this->_params['duration'];
		$groupId = $this->_params['groupId'];
		$schedule = $this->_params['schedule'];
		$amount = $this->_params['amount'];
		
		$success = $this->_crud->create($groupId, $subjectId, $startdate, $duration, $schedule, $amount);
		return $success;
   }
}