<?php
include_once "TeacherRepository.php";

class Teacher
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
}