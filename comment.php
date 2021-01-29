
<div style="background-color:beige;">

<!DOCTYPE html>
<html>
<head>
	<title>product infos</title>
</head>
<body>







<?php
$productimage=$_POST['product_image_url'];

$Memberid=$_POST['id'];
$Productid=$_POST['product_id'];
$email=$_POST['Useremail'];


if (isset($_POST['rating'])) 

{
	$rate = $_POST['rating'];
	include "config.php";

	$sql_sttatement = "INSERT INTO `rate` ( `pid`, `mid`, `rate`) VALUES ($Productid, $Memberid, $rate);";

	$resultt=mysqli_query($db,$sql_sttatement);


}



?>



 <img src='<?php echo "$productimage";?>' alt="House" style="width:100%"><br>




<?php
include "config.php";

$sql_statement2="SELECT * FROM products WHERE products.PID=$Productid";

$resulta=mysqli_query($db,$sql_statement2);


$sql_sttatement1 = "SELECT COUNT(I.Mid_Purchased) as 'invoice_count'FROM invoice I , products P WHERE P.PID =I.pid AND I.Mid_Purchased = $Memberid AND I.pid = $Productid";



//rate if purchased
// $sql_sttatement = "SELECT * FROM products,invoice WHERE invoice.pid=$Productid and invoice.pid = products.PID and invoice.Mid_Purchased = $Memberid";
$sql_sttatement = "SELECT COUNT(R.mid) as 'count_rate' FROM rate R WHERE R.pid = $Productid and R.mid = $Memberid";

$resultt=mysqli_query($db,$sql_sttatement);

$result_2=mysqli_query($db,$sql_sttatement1);

if ( $row=mysqli_fetch_assoc($resultt) )
{




	if( $row2=mysqli_fetch_assoc($result_2))
	{
	$count_rate = (int) $row['count_rate'];
	$count_invoice = (int) $row2['invoice_count'];


	if ($count_rate == 0 && $count_invoice != 0) {
	 

?>


	<h1> Rate the product: </h1>
<form action="comment.php" method="POST">
	<input type='hidden' name='id' value='<?php echo "$Memberid";?>'/>
   <input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>
          <input type='hidden' name='product_id' value='<?php echo "$Productid";?>' />
           <input type='hidden' name='product_image_url' value='<?php echo "$productimage";?>' />
	<select name="rating">




<?php




		echo "<option value=\"1\">"."1"."</option>";
		echo "<option value=\"2\">"."2"."</option>";
		echo "<option value=\"3\">"."3"."</option>";
		echo "<option value=\"4\">"."4"."</option>";
		echo "<option value=\"5\">"."5"."</option>";


?>
	</select>


	<button>
		RATE
	</button>

</form>




<?php

}

}


}


$sql_sttatementsa = "SELECT COUNT(*) as count from rate where rate.rate = 1 and rate.pid = '$Productid'";
$sql_sttatementsa1 = "SELECT COUNT(*) as count from rate where rate.rate = 2 and rate.pid = '$Productid'";
$sql_sttatementsa2 = "SELECT COUNT(*) as count from rate where rate.rate = 3 and rate.pid = '$Productid'";
$sql_sttatementsa3 = "SELECT COUNT(*) as count from rate where rate.rate = 4 and rate.pid = '$Productid'";
$sql_sttatementsa4 = "SELECT COUNT(*) as count from rate where rate.rate = 5 and rate.pid = '$Productid'";


$resultta=mysqli_query($db,$sql_sttatementsa);
$resultta1=mysqli_query($db,$sql_sttatementsa1);
$resultta2=mysqli_query($db,$sql_sttatementsa2);
$resultta3=mysqli_query($db,$sql_sttatementsa3);
$resultta4=mysqli_query($db,$sql_sttatementsa4);
$star1=0;
$star2= 0;
$star3=0;
$star4=0;
$star5=0;



$count = 0;



while ( $row=mysqli_fetch_assoc($resultta)) {

	$star1 = $row['count'];
}
while ( $row=mysqli_fetch_assoc($resultta1)) {
	$star2 = $row['count'];


}
while ( $row=mysqli_fetch_assoc($resultta2)) {
	$star3 = $row['count'];

}
while ( $row=mysqli_fetch_assoc($resultta3)) {
	$star4 = $row['count'];
	
}
while ( $row=mysqli_fetch_assoc($resultta4)) {
	$star5 = $row['count'];
	
}

$count = $count +1;
$check = "checked";


 
$total = $star1 + $star2 + $star3 + $star4 + $star5;
$average = ($star1 + ($star2)*2 + ($star3)*3 + ($star4)*4 + ($star5)*5)/$total; 
$per1 = $star1/$total*100;
$per2 = $star2/$total*100;
$per3 = $star3/$total*100;
$per4 = $star4/$total*100;
$per5 = $star5/$total*100;

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: <?php echo "$per5"."%" ?>; height: 18px; background-color: #4CAF50;}
.bar-4 {width: <?php echo "$per4"."%" ?>; height: 18px; background-color: #2196F3;}
.bar-3 {width: <?php echo "$per3"."%" ?>; height: 18px; background-color: #00bcd4;}
.bar-2 {width: <?php echo "$per2"."%" ?>; height: 18px; background-color: #ff9800;}
.bar-1 {width: <?php echo "$per1"."%" ?>; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head>
<body>



<span class="heading">User Rating</span>
<span class="<?php if($average>=1){ echo  "fa fa-star ".$check;}else{echo  "fa fa-star ";}?>"> </span>
<span class="<?php if($average>=2){ echo  "fa fa-star ".$check;}else{echo  "fa fa-star ";}?>"></span>
<span class="<?php if($average>=3){ echo  "fa fa-star ".$check;}else{echo  "fa fa-star ";}?>"></span>
<span class="<?php if($average>=4){ echo  "fa fa-star ".$check;}else{echo  "fa fa-star ";}?>"></span>
<span class="<?php if($average>4.8){ echo  "fa fa-star ".$check;}else{echo  "fa fa-star ";}?>"></span>
<p><?php echo "$average"." average based on ". "$total". " reviews.";?></p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo "$star5";?></div> 
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo "$star4";?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo "$star3";?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo "$star2";?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo "$star1";?></div>
  </div>
</div>

</body>
</html>



<?php

try
{
	if (isset($_POST['comment'])) {
    

  $newcomment =$_POST['comment'];


 if($newcomment != "")
{
	include "config.php";

	$sql1_statement = "INSERT INTO `comments` (`mid`, `pid`, `MComment`) VALUES ('$Memberid', '$Productid', '$newcomment');";

			$result = mysqli_query($db, $sql1_statement);
}



}	
}
catch (Exception $e) {
    echo "catch e girdi";
}




include "config.php";


if (isset($_POST['id'])){

$Memberid=$_POST['id'];
$Productid=$_POST['product_id'];
$email=$_POST['Useremail'];

?>


	<form action="comment.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$Memberid";?>'/>
   <input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>
          <input type='hidden' name='product_id' value='<?php echo "$Productid";?>' />
           <input type='hidden' name='product_image_url' value='<?php echo "$productimage";?>' />


Please enter your comment:
<input type="text" name="comment" >
<br />
<button> ADD NEW COMMENT </button>
</form>

<?php


$sql_sttatement = "SELECT * FROM comments WHERE comments.pid='$Productid'";

$resultt=mysqli_query($db,$sql_sttatement);

echo "<h3>"."Previous Comments:"."</h3>"."<br><br>";
while ( $row=mysqli_fetch_assoc($resultt)) {

	$comment=$row['MComment'];
	$member_commenter = $row['mid'];


	$sql_sttatementsa = "SELECT * FROM member WHERE member.Member_ID='$member_commenter'";

$resultta=mysqli_query($db,$sql_sttatementsa);


if ( $row=mysqli_fetch_assoc($resultta)) {
	$member_commenter = $row['Member_name'];
	echo  "<tr>"."<th>" .$member_commenter."</th>"."<th><br>";
}
	echo "<tr>"."<th>" .$comment."</th>"."<th><br><br>";
	
}



}


?>

<form action="User_entered_mainpage.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$Memberid";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$email";?>'/>
<br>

<button> Return to main page </button>
<br/>
</form>

</div>




