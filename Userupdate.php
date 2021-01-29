<?php


include "config.php";

//mysql_connect("localhost","root","");
//mysql_select_db("group_26");

if (isset($_POST['id'])){

$id=$_POST['id'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Address=$_POST['Address'];



if (isset($_POST['add']) && isset($_POST['Passcheck'])) {
    

   header ("Location: indextest.php");






}

elseif(isset($_POST['Passcheck']))//adress change 
{
	//$Address=$_POST['Address'];

	$sql1_statement = "UPDATE `member` SET `M_Address`='$Address' WHERE  `Member_ID`='$id'";

	$result = mysqli_query($db, $sql1_statement);

	//echo $result;


}
elseif(isset($_POST['add']))//pasword change
{

	$sql1_statement = "UPDATE `member` SET `Member_pass`='$Password' WHERE  `Member_ID`='$id'";

	$result = mysqli_query($db, $sql1_statement);



}
else//both of them
{
	 $sql1_statement = "UPDATE `member` SET `Member_pass`='$Password' ,`M_Address`='$Address' WHERE  `Member_ID`='$id'";

	$result = mysqli_query($db, $sql1_statement);



}

}






?>

<form action="User_login.php" method="POST">
<div align="center">
<h1 style="color:red;" align="center">Your information has been successfully changed
</h1>

<button > Return to Login Page </button >

</div>

</form>