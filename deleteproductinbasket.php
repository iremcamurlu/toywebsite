<?php


include "config.php";

if (isset($_POST['product_deleted'])){

$selection_id = $_POST['product_deleted'];


$User_id = $_POST['id'];
$email =$_POST['Email'];


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

else
{

	echo "The form is not set.";

}




?>

<h1>ARE YOU SURE ?</h1>
<form action="viewbasket.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$User_id";?>'/>
<input type='hidden' name='Email' value='<?php echo "$email";?>'/>
<button> I AM SURE </button>
</form>