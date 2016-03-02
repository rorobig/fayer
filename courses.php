<?php 
include ('config/config.php');
$selectProductsQuery ="SELECT * FROM product";
$selectProductQueryResult = $mysqli -> query($selectProductsQuery);

if ($selectProductQueryResult ->num_rows >0){
$productExists = true;
}else{
	$productExists =false;
}




$content= "content/courses.php";
include("templates/master.php");

 ?>