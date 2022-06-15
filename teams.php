<?php 
header('Access-Control-Allow-Origin: *');
$teams = ["Name"=>"Team1"];
echo json_encode($teams);
?>