<?php 

include "config.php";
include "products.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];


$sql_statement = "DELETE FROM products WHERE PID = $selection_id";

$result = mysqli_query($db, $sql_statement);



header ("Location: productmanager.php");

}

else
{

	echo "The form is not set.";

}

?>