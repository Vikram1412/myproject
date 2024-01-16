<?php

include('config.php');

$sql= "select * from users";

$run = mysqli_query($con,$sql);


$rows = mysqli_num_rows($run);

echo $rows;


$data = mysqli_fetch_array($run);

$jsons = json_encode($data, true);

echo $jsons .'<br/>';

$arr = json_decode($jsons,true);

echo '<pre>';

print_r($arr);

foreach( $arr as $key => $value){

       // echo $value->idusers;

}



?>