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
 
    public function getAction()
	{
		return "Not implemented!";
	}

	public function createAction()
	{
		//Код предмета. Обязательный
		if (isset($_GET['subjectId'])) {
			$subjectId = $this->_params['subjectId'];
		}
		else {
			throw new Exception("Subject Id is Required!");
		}
		
		//Продолжительность одного занятия. Минуты. Обязательный
		if (isset($_GET['duration'])) {
			$duration = $this->_params['duration'];
		}
		else {
			throw new Exception("Duration is Required!");
		}
		
		//Код группы, для которой создается расписание. Обязательный
		if (isset($_GET['groupId'])) {
			$groupId = $this->_params['groupId'];
		}
		else {
			throw new Exception("GroupId is Required!");
		}		

		//Количество академических часов. Обязательный
		if (isset($_GET['amount'])) {
			$amount = $this->_params['amount'];
		}
		else {
			throw new Exception("Amount is Required!");
		}		
	
		//Предпочитаемая недельная раскладка занятий. Массив Дата/Время значений. Как минимум один елемеент обязателен
		if (isset($_GET['schedule'])) {
			$schedule = $this->_params['schedule'];
		}
		else {
			throw new Exception("Schedule is Required!");
		}		
		
		//Дата начала первого занятия. Если отсутствует - дата начала считается на основании первого элемента Schedule
		$startdate = $this->_params['startdate'];
		
		$success = $this->_crud->create($groupId, $subjectId, $startdate, $startdate, $duration, $schedule, $amount);
		return $success;
   }
}