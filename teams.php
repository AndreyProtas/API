<?php 
header('Access-Control-Allow-Origin: *');

$teams["1"] = ["Name"=>"Shanghai Port", "Image"=>"/img/16541.png"];
$teams["2"] = ["Name"=>"Guangzhou", "Image"=>"/img/19367.png"];
$teams["3"] = ["Name"=>"Wuhan", "Image"=>"/img/56919.png"];
$teams["4"] = ["Name"=>"Energetik", "Image"=>"/img/58280.png"];
$teams["5"] = ["Name"=>"Grulla Morioka", "Image"=>"/img/63678.png"];

$teams["1"]["Players"]["1"] = ["Name"=>"Medvedev Daniil", "Image"=>"/img/players/56991.png", "Forehand"=>"5", "Backhand"=>"1", "Serve"=>"3", "Footwork"=>"5"];
$teams["1"]["Players"]["2"] = ["Name"=>"Goffin David", "Image"=>"/img/players/57153.png", "Forehand"=>"4", "Backhand"=>"3", "Serve"=>"3", "Footwork"=>"2"];
$teams["1"]["Players"]["3"] = ["Name"=>"Kyrgios Nick", "Image"=>"/img/players/58826.png", "Forehand"=>"3", "Backhand"=>"3", "Serve"=>"5", "Footwork"=>"2"];

$teams["2"]["Players"]["1"] = ["Name"=>"Pliskova Karolina", "Image"=>"/img/players/52198.png", "Forehand"=>"3", "Backhand"=>"3", "Serve"=>"5", "Footwork"=>"2"];
$teams["2"]["Players"]["2"] = ["Name"=>"Bianca Vanessa", "Image"=>"/img/players/52406.png", "Forehand"=>"1", "Backhand"=>"5", "Serve"=>"4", "Footwork"=>"2"];
$teams["2"]["Players"]["3"] = ["Name"=>"Tsitsipas Stefanos", "Image"=>"/img/players/56285.png", "Forehand"=>"5", "Backhand"=>"1", "Serve"=>"3", "Footwork"=>"4"];

$teams["3"]["Players"]["1"] = ["Name"=>"De Minaur Alex", "Image"=>"/img/players/59801.png", "Forehand"=>"1", "Backhand"=>"5", "Serve"=>"3", "Footwork"=>"3"];
$teams["3"]["Players"]["2"] = ["Name"=>"Davidovich Fokina", "Image"=>"/img/players/61207.png", "Forehand"=>"4", "Backhand"=>"2", "Serve"=>"4", "Footwork"=>"1"];
$teams["3"]["Players"]["3"] = ["Name"=>"Carreno Busta", "Image"=>"/img/players/61245.png", "Forehand"=>"2", "Backhand"=>"1", "Serve"=>"5", "Footwork"=>"5"];

$teams["4"]["Players"]["1"] = ["Name"=>"Korda Sebastia", "Image"=>"/img/players/57547.png", "Forehand"=>"5", "Backhand"=>"2", "Serve"=>"1", "Footwork"=>"5"];
$teams["4"]["Players"]["2"] = ["Name"=>"Kasatkina Daria", "Image"=>"/img/players/58715.png", "Forehand"=>"2", "Backhand"=>"4", "Serve"=>"4", "Footwork"=>"1"];
$teams["4"]["Players"]["3"] = ["Name"=>"Alexandrova Ekaterina", "Image"=>"/img/players/60201.png", "Forehand"=>"3", "Backhand"=>"2", "Serve"=>"1", "Footwork"=>"5"];

$teams["5"]["Players"]["1"] = ["Name"=>"Hurkacz Hubert", "Image"=>"/img/players/62323.png", "Forehand"=>"5", "Backhand"=>"1", "Serve"=>"3", "Footwork"=>"5"];
$teams["5"]["Players"]["2"] = ["Name"=>"Humbert Ugo", "Image"=>"/img/players/63661.png", "Forehand"=>"1", "Backhand"=>"4", "Serve"=>"3", "Footwork"=>"2"];
$teams["5"]["Players"]["3"] = ["Name"=>"Gauff Cori", "Image"=>"/img/players/63429.png", "Forehand"=>"4", "Backhand"=>"2", "Serve"=>"1", "Footwork"=>"4"];
$teams["5"]["Players"]["4"] = ["Name"=>"Paula Tommy", "Image"=>"/img/players/65237.png", "Forehand"=>"5", "Backhand"=>"2", "Serve"=>"4", "Footwork"=>"3"];

echo json_encode($teams);
?>