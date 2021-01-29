<div style="background-image: url('image/oyuncakci.jpg');">

<?php


include "config.php";


if (isset($_POST['id'])){

$Memberid=$_POST['id'];
$Productid=$_POST['product_id'];
$email=$_POST['Useremail'];




mysql_connect("localhost","root","");
mysql_select_db("group_26");
//echo $result;

//$sql_statement = "SELECT * FROM member WHERE email = '$UserEmail' and Member_pass='$UserPass'";

$result = mysql_query("SELECT * FROM basket WHERE mid = '$Memberid' and pid='$Productid'") or die ("Fail to query".mysql_error());

$row=mysql_fetch_array($result);




//echo "Result is". $row["email"];



	if($row["pid"]==$Productid and $row["mid"]==$Memberid)
	{

		

		$Prcount=$row['P_Count'];
		$Prcount= $Prcount+1;





		$result2 = mysql_query("UPDATE `basket` SET `P_Count`=$Prcount WHERE mid=$Memberid AND pid=$Productid") or die ("Fail to query".mysql_error());

		//$row2=mysql_fetch_array($result);







	}

	//header("Location: User_entered_mainpage.php");
	//header ("Location: index.php");
	else
	{


			$sql1_statement = "INSERT INTO `basket` (`mid`, `pid`, `Basketid`, `P_Count` ) VALUES ($Memberid, $Productid,$Memberid, '1');";

			$result = mysqli_query($db, $sql1_statement);





	}


 


}

else
{

	echo "The form is not set.";

}






?>

<h1 align='center' style="color:blue;">PRODUCT IS ADDED</h1>
<br><br>
<br><br>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

<form action="User_entered_mainpage.php" method="POST" align='center'>
<input type='hidden' name='id' value='<?php echo "$Memberid";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>

<button> <h1>Continue Shopping</h1> </button>

<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>
<br><br><br><br><br>


</form>

</div>