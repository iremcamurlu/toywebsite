
<div style="background-image: url('image/oyuncakci.jpg');">
<h1 align="center">START SHOPPING</h1>
<?php


include "config.php";





$Mname="Customer";
$Mpass="";
$Email=rand(0,10000);//DATA DA VARSA BİR DAAH RANDOM ATMAYI UNUTMA
$Mage="";
$Madd="";


$sql1_statement = "INSERT INTO `member` (`Member_name`, `Member_pass`, `email`, `AGE`, `Membership_statue`, `M_Address`) VALUES ( '$Mname', NULL, '$Email', '10', '1', '');";



$result = mysqli_query($db, $sql1_statement);	



mysql_connect("localhost","root","");
mysql_select_db("group_26");


//$sql_statement = "SELECT * FROM member WHERE email = '$UserEmail' and Member_pass='$UserPass'";

$result2 = mysql_query("SELECT * FROM member WHERE member.email = $Email") or die ("Fail to query".mysql_error());

$row=mysql_fetch_array($result2);

$Memberid=$row['Member_ID'];







?>
<br><br>
<br><br>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

<form action="user_entered_mainpage.php" method="POST" align='center'>
	<input type='hidden' name='id' value='<?php echo "$Memberid";?>'/>
	<input type='hidden' name='Useremail' value='<?php echo "$Email";?>'/>
	<button align="center"> 
	<h4>GO TO SHOPPING</h4>
	</button>

</form>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>
<br><br><br><br><br>
</div>
