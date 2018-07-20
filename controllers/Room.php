<?php
include_once "RoomRepository.php";

class Room
{
	private $_params;
	private $_crud;
 
   public function __construct($params, $crud)
   {
      $this->_params = $params;
	  $this->_crud = new crud();
   }
 
   public function GetAction()
   {
		$success = $this->_crud->get();
		return $success;
   }

   public function GetCalendarAction()
   {
		$roomId = $this->_params['roomId'];

		$success = $this->_crud->getCalendar($teacherId);
		return $success;
   }
   

}