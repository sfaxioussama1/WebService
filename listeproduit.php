<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

require 'connection.php';

showt();
}

function showt(){
global $connect;

//$idstation = 1;
$query = " Select *  FROM produits ";


$result = mysqli_query($connect,$query);
$number_of_rows = mysqli_num_rows($result);

$temp_array = array();

if($number_of_rows >0 ){

	while($row = mysqli_fetch_assoc($result)){
	$temp_array[]=$row;
	}

      }

header('content-Type: application/json');
echo json_encode(array("produits"=>$temp_array));
mysqli_close($connect);

}
?>