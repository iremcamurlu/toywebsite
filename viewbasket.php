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
  background-color: beige;
}
</style>
</head>
<body>
	<table>
  <tr>
  	<th>Product ID </th>
    <th>Product Category</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Count</th>
    <th>Product Rate </th>
  </tr>




<?php

include "config.php";



if(isset($_POST['id']))
{

$Userid=$_POST['id'];
$email =$_POST['Email'];


}




$sql_statement="SELECT * FROM basket,products WHERE products.PID=basket.pid AND basket.mid=$Userid";

$result=mysqli_query($db,$sql_statement);

while ( $row=mysqli_fetch_assoc($result)) {

  $productid=$row['pid'];
	$product=$row['PName'];	
	$category=$row['PCategory'];
	$price=$row['P_Price'];


  $sql_statement2="SELECT AVG(rate) as rate_avg FROM rate WHERE $productid = rate.pid;";

  $result2=mysqli_query($db,$sql_statement2);

  if($avg=mysqli_fetch_assoc($result2))
  {
  $rate=$avg['rate_avg'];
  $count=$row['P_Count'];


	echo "<tr>"."<th>" .$productid."</th>"."<th>" .$category ."</th>"."<th>" .$product ."</th>"."<th>".$price."</th>"."<th>" .$count ."</th>"."<th>" .$rate."</th>"."</tr>";
}
	
}
echo "<br></br>";



function runMyFunction($User_id,$selection_id) {
  include "config.php";



echo $selection_id ." ".$User_id;

mysql_connect("localhost","root","");
mysql_select_db("group_26");


//$sql_statement = "SELECT * FROM member WHERE email = '$UserEmail' and Member_pass='$UserPass'";

$result = mysql_query("SELECT * FROM basket WHERE mid = '$User_id' and pid='$selection_id'") or die ("Fail to query".mysql_error());

$row=mysql_fetch_array($result);



$Prcount=$row['P_Count'];

if($row["pid"]==$selection_id and $row["mid"]==$User_id and $Prcount>1 )
  {

    

    
    $Prcount= $Prcount-1;



    $result2 = mysql_query("UPDATE `basket` SET `P_Count`=$Prcount WHERE mid=$User_id AND pid=$selection_id") or die ("Fail to query".mysql_error());

    //$row2=mysql_fetch_array($result);







  }
  else
  {

    $sql_statement = "DELETE FROM basket WHERE pid = $selection_id and mid=$User_id";

    $result3 = mysqli_query($db, $sql_statement);



  }




//header ("Location:viewbasket.php");

}


?>


</table>
<br></br>

Enter the product ID you want to delete:
<form action="deleteproductinbasket.php" method="POST">
<input type="text" name="product_deleted">
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<input type='hidden' name='Email' value='<?php echo "$email";?>'/>
<button> Delete </button>
</form>


<form action="User_entered_mainpage.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>
<br />

<button> Return to main page </button>
<br></br>
<br />
</form>




<?php


    if((strlen($email) <= 4))
    { 

?>
Proceed with Checkout:
<form action="invoice.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<input type='hidden' name='Email' value='<?php echo "$email";?>'/>
Please enter your address: 
<textarea name="notmember" placeholder="Enter your address"></textarea>
<br />
<br>


<?php

}

?>

<button> BUY NOW </button>
<br><br>
</form>


</body>
</html>


