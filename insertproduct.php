<?php


include "config.php";

include "products.php";	

if (isset($_POST['Product_Name'])){

$product=$_POST['Product_Name'];
$P_Category=$_POST['Product_Category'];
$price=(int)$_POST['Product_Price'];
$stock=(int)$_POST['Product_Stock'];
$pimage=$_POST['Product_Image'];



$sql1_statement = "INSERT INTO `products` (`PName`, `PCategory`, `P_Price`, `P_Stock`, `PImage`, `im_size`) VALUES ('$product', '$P_Category', '$price', '$stock' , '$pimage', '100')";




$result = mysqli_query($db, $sql1_statement);


 
header ("Location: productmanager.php");

}

else
{

	echo "The form is not set.";

}


?>