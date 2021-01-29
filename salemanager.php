<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<table>
  <tr>
  	<th>Invoice ID </th>
  	<th>Member ID </th>
  	<th>Product ID </th>
    <th>Product date</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Count</th>
    <th>Product status </th>
  </tr>



<?php

	if (isset($_POST['ids']) && isset($_POST['status'])){

$invoiice_id =(int) $_POST['ids'];
$status = $_POST['status'];



mysql_connect("localhost","root","");
mysql_select_db("group_26");


$resulmt2 = mysql_query("UPDATE `invoice` SET `order_status`='$status' WHERE invoice_id=$invoiice_id ") or die ("Fail to query".mysql_error());



}


?>

<?php

include "config.php";



if(isset($_POST['id']))
{

$Userid=$_POST['id'];
$email =$_POST['Email'];


}




$sql_statement="SELECT * FROM invoice";

$result=mysqli_query($db,$sql_statement);

while ( $row=mysqli_fetch_assoc($result)) {



$id = $row['invoice_id'];
  $pid = $row['pid'];
  $mid = $row['Mid_Purchased'];
	$product=$row['Pname_Purchased'];	
	$price=$row['P_Price_Purchased'];
  $date=$row['Date_order'];
  $count=$row['P_Count'];
  $statue = $row['order_status'];


	echo "<tr>"."<th>".$id. "</th>"."<th>" .$mid."</th>"."<th>". $pid."</th>"."<th>" .$date ."</th>"."<th>" .$product ."</th>"."<th>".$price."</th>"."<th>" .$count ."</th>"."<th>" .$statue."</th>"."</tr>";
	
}

?>

</table>


<h1> Select the invoice id which you will change: </h1>
<form action="salemanager.php" method="POST">
	<select name="ids">
<?php


	$sql_command="SELECT invoice_id from invoice ";

	$myresult=mysqli_query($db,$sql_command);
	

	while ($id_rows=mysqli_fetch_assoc($myresult) )
	{
		$id=$id_rows['invoice_id'];

		echo "<option value=$id>".$id."</option>";
	}

?>
	</select>


	<h1> Select the Orders status: </h1>
<form action="salemanager.php" method="POST">
	<select name="status">
<?php




		echo "<option value=\"Order Canceled\">"."Order Canceled"."</option>";
		echo "<option value=\"Order Received\">"."Order Received"."</option>";
		echo "<option value=\"Order Shipped\">"."Order Shipped"."</option>";
		echo "<option value=\"Order Delivered\">"."Order Delivered"."</option>";


?>
	</select>


	<button>
		SELECT
	</button>




 </form>



<form action="index.php" method="POST">
      <p><button class="w3-button w3-light-grey w3-block">Log Out</button></p>
    </form>


</body>
</html>



