
<div style="background-image: url('image/oyuncakci.jpg');">

<h1 align="center">START SHOPPING<h1>
<?php


if(isset($_POST['Email']))
{

$UserEmail=$_POST['Email'];
$UserPass=$_POST['Password'];


mysql_connect("localhost","root","");
mysql_select_db("group_26");


//$sql_statement = "SELECT * FROM member WHERE email = '$UserEmail' and Member_pass='$UserPass'";

$result = mysql_query("SELECT * FROM member WHERE email = '$UserEmail' and Member_pass='$UserPass'") or die ("Fail to query".mysql_error());

$row=mysql_fetch_array($result);





	if($row["email"]==$UserEmail and $row["Member_pass"]==$UserPass)
	{

		if($row["Membership_statue"]==2)//For product Manager
		{

			header ("Location: productmanager.php");

		}

		if($row["Membership_statue"]==3)//for sale mamager
		{

			header ("Location: salemanager.php");

		}


		$Memberid=$row['Member_ID'];
		






	}
	else 

	{

		

		header ("Location: User_login.php");


	}


}

else
{

	echo "The form is not set ";

}


?>
<br><br>
<br><br>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

<form action="user_entered_mainpage.php" method="POST" align='center'>
	<input type='hidden' name='id' value='<?php echo "$Memberid";?>'/>
	<input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>
	<button align="center"> 
	<h4>GO TO SHOPPING</h4>
	</button>


<br><br>
<br><br><br><br><br><br><br><br>
</form>
</div>
