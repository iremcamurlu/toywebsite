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
  	<th>Product ID </th>
    <th>Product Name</th>
    <th>Product Price</th>
  </tr>

<?php

include "config.php";

$sql_statement="SELECT * FROM products";

$result=mysqli_query($db,$sql_statement);

while ( $row=mysqli_fetch_assoc($result)) {


	$product=$row['PName'];	
	$price=$row['P_Price'];
	$pid=$row['PID'];
	echo "<tr>"."<th>" .$pid ."</th>"."<th>" .$product ."</th>"."<th>".$price."</th>"."</tr>";
	
}


?>
</table>

</body>
</html>