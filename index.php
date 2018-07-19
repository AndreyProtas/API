<?php

try {
   $params = $_REQUEST;
   $controller = ucfirst(strtolower($params['controller']));
   $action = strtolower($params['action']).'Action';
 
   //check if the controller exists. if not, throw an exception
   if( file_exists("controllers/{$controller}.php") ) {
      include_once "controllers/{$controller}.php";
   } else {
      throw new Exception('Controller is invalid!');
   }

   //create a new instance of the controller, and pass
   //it the parameters from the request
   $controller = new $controller($params, $crud);
 
   //check if the action exists in the controller. if not, throw an exception.
   if( method_exists($controller, $action) === false ) {
      throw new Exception('Action is invalid.');
   }
 
   //execute the action
   $result['data'] = $controller->$action();
   $result['success'] = true;
 
   } catch( Exception $e ) {
   //catch any exceptions and report the problem
   $result = array();
   $result['success'] = false;
   $result['errormsg'] = $e->getMessage();
}

echo json_encode($result);
exit();