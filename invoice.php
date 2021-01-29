<?php


include "config.php";



if(isset($_POST['id']))
{

$Userid=$_POST['id'];
$email =$_POST['Email'];
$Address =$_POST['notmember'];



}

if(isset($_POST['notmember']))
{

	$sql5_statement = "UPDATE `member` SET `M_Address`='$Address' WHERE  `Member_ID`='$Userid'";
         
	$result5 = mysqli_query($db, $sql5_statement);



}


$sql_statement="SELECT * FROM basket,products WHERE products.PID=basket.pid AND basket.mid=$Userid";

$result=mysqli_query($db,$sql_statement);

while ( $row=mysqli_fetch_assoc($result)) {

$productid=$row['pid'];
$product=$row['PName'];	
$category=$row['PCategory'];
$price=$row['P_Price'];

$count=$row['P_Count'];



$sql1_statement = "INSERT INTO `invoice` (`pid`, `basketid`, `Mid_Purchased`, `Pname_Purchased`, `P_Price_Purchased`, `P_Count`, `Date_order`, `order_status`) VALUES ('$productid', '$Userid', '$Userid', '$product', '$price', '$count', CURRENT_TIMESTAMP, 'Order received');";


$result2 = mysqli_query($db, $sql1_statement);

echo $result2;


$sql3_statement = "DELETE FROM basket WHERE pid = $productid and mid=$Userid";

$result3 = mysqli_query($db, $sql3_statement);







}




?>

<form action="User_entered_mainpage.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>

<button> Return to maın page </button>
</form>