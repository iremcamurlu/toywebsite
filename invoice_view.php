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
    <th>Product date</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Count</th>
    <th>Product status </th>
  </tr>




<?php

include "config.php";



if(isset($_POST['id']))
{

$Userid=$_POST['id'];
$email =$_POST['Email'];


}




$sql_statement="SELECT * FROM invoice WHERE invoice.Mid_Purchased=$Userid";

$result=mysqli_query($db,$sql_statement);

while ( $row=mysqli_fetch_assoc($result)) {


  $pid = $row['pid'];
	$product=$row['Pname_Purchased'];	
	$price=$row['P_Price_Purchased'];
  $date=$row['Date_order'];
  $count=$row['P_Count'];
  $statue = $row['order_status'];


	echo "<tr>"."<th>" .$pid."</th>"."<th>" .$date ."</th>"."<th>" .$product ."</th>"."<th>".$price."</th>"."<th>" .$count ."</th>"."<th>" .$statue."</th>"."</tr>";
	
}

?>



</table>

<form action="User_entered_mainpage.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>
<br />

<button> Return to main page </button>
<br />
</form>


</body>
</html>



