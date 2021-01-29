<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php


if(isset($_POST['id']))
{

$Userid=$_POST['id'];
$UserEmail=$_POST['Useremail'];


}

?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Group26</b></a>
    <!-- Float links to the right. Hide them on small screens -->
   


 <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Products</a>
      <form action="viewbasket.php" method="POST">
      <p><button class="w3-button w3-light-grey w3-block">View Basket</button></p>
       <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
       <input type='hidden' name='Email' value='<?php echo "$UserEmail";?>'/>
    </form>




    <?php

    if(!(strlen($UserEmail) == 4))
    {


    echo "<form action=\"infoManager.php\" method=\"POST\">";
         echo "<p><button class=\"w3-button w3-light-grey w3-block\">Change information</button></p>";
         echo "<input type='hidden' name='id' value='".$Userid."'/>";
         echo "<input type='hidden' name='Email' value='".$UserEmail."'/>";
    echo "</form>";



        echo "<form action=\"invoice_view.php\" method=\"POST\">";
         echo "<p><button class=\"w3-button w3-light-grey w3-block\">View past invoices</button></p>";
         echo "<input type='hidden' name='id' value='".$Userid."'/>";
         echo "<input type='hidden' name='Email' value='".$UserEmail."'/>";
    echo "</form>";


    }
    ?>

    <form action="index.php" method="POST">
      <p><button class="w3-button w3-light-grey w3-block">Log Out</button></p>
    </form>
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<a  class="w3-bar-item w3-button" ><?php echo "$Userid";?></a>
<a  class="w3-bar-item w3-button" ><?php echo "$UserEmail";?></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="image/oyuncakci.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>LIFE IS A TOY STORY - GROUP 26</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Products</h3>

    Enter search name:
<form action="Filtered_ones.php" method="POST">
<input type="text" name="Serch_name">
<input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>
<button> Search </button>

  </div>


            <!-- CSS property to place div 
            side by side -->
        <style>  
            #category_filter { 
                float:left;  
                background:beige; 
                width:25%; 
                height:280px; 
            } 
            #Order{ 
                float:left;  
                background:beige; 
                width:50%; 
                height:280px; 
            } 
            #by_price{ 
                float:right; 
                background:beige; 
                width:25%; 
                height:280px; 
            } 
            h1{ 
                color:black; 
                text-align:center; 
            } 
        </style>  

  <div id ="category_filter">

<h2>Filter by category: </h2>

  <div id="myBtnContainer">

    <form action="User_entered_mainpage.php" method="POST">
    <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
    <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>
    <br />

    <button> ALL </button>
    <br />
    </form>

    </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Barbie";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

          <button class="btn btn-success">Barbie</button>
       </form>

       </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Board game";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>
          
          <button class="btn btn-success">Board game</button>
       </form>

       </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Car";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

          <button class="btn btn-success">Car</button>
       </form>

       </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Doll";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

          <button class="btn btn-success">Doll</button>
       </form>


       </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Animal";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

          <button class="btn btn-success">Animal</button>
       </form>
  


       </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Star Wars";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

          <button class="btn btn-success">Star Wars</button>
       </form>
  

       </form> 
          <form action="Filtered_ones.php" method="POST">
          <input type='hidden' name='category' value='<?php echo "Harry Potter";?>'/>
          <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
          <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

          <button class="btn btn-success">Harry Potter</button>
       </form>  
     </div>


</div>

<div id='Order' align = 'center'>

        <h1> Sort By </h1>
<form action="Filtered_ones.php" method="POST" align = 'center'>
  <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
  <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>

  <select name="sorting_type">
<?php




    echo "<option value=\"Alphabetical Order\">"."Alphabetical Order"."</option>";
    echo "<option value=\"Reverse Alphabetical Order\">"."Reverse Alphabetical Order"."</option>";
    echo "<option value=\"Price Lowest to Highest\">"."Price Lowest to Highest"."</option>";
    echo "<option value=\"Price Highest to Lowest\">"."Price Highest to Lowest"."</option>";
    echo "<option value=\"Rate\">"."Rate"."</option>";


?>
  </select>


  <button>
    SORT
  </button>


</form>
</div>

<div id="by_price">

<h2>Filter by price: </h2>


<form action="Filtered_ones.php" method="POST">


  <div>

  <p>Please select price range: </p>
  <input type='hidden' name='id' value='<?php echo "$Userid";?>'/>
  <input type='hidden' name='Useremail' value='<?php echo "$UserEmail";?>'/>
  <input type="radio" name="price" value="100">
  <label for="age1">0 - 100</label><br>
  <input type="radio"  name="price" value="200">
  <label for="age2">100 - 200</label><br>  
  <input type="radio" name="price" value="300">
  <label for="age3">200-300</label><br>
  <input type="radio" name="price" value="400">
  <label for="age3">300+</label><br><br>
  <input type="submit" name='submit' value="Submit">
</div>
  
</form>
</div>
</div>
<br></br><br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

<?php



include "config.php";


function print_image($image , $pid, $Pname, $price , $im_size ) 
{

    include "config.php";


$sql_stttatement = "SELECT products.P_Stock FROM products WHERE products.PID = $pid;";

$resultta=mysqli_query($db,$sql_stttatement);
$stock  = 1;

while ( $row=mysqli_fetch_assoc($resultta)) {

  $stock =(int)$row['P_Stock'];
}


$Userid=$_POST['id'];
$UserEmail=$_POST['Useremail'];


    echo "</div>";
  echo "<div class=\"w3-col l3 m6 w3-margin-bottom\">";
  echo "<div class=\"w3-display-container\">";
  echo  "<div class=\"w3-display-topleft w3-black w3-padding\">".$Pname." ".$price ."TL"."</div>";
  echo   "<img src=".$image." alt=\"House\" style=\"width:".$im_size."%\">";
  echo   "<form action=\"basket.php\" method=\"Post\">";
  echo   "<input type='hidden' name='id' value='".$Userid."'/>";
  echo    "<input type='hidden' name='Useremail' value='".$UserEmail."'/>";
  echo    "<input type='hidden' name='product_id' value=".$pid." />";
  echo   "<div class=\"w3-display-middle w3-display-hover\">";
  if($stock > 0)
{

  echo   "<button class=\"w3-button w3-black\">Add to Basket<i class=\"fa fa-shopping-cart\"></i></button><br><br>";
        }
        else
        {
          echo   "<text class=\"w3-button w3-black\">Out Of Stock<i class=\"fa fa-shopping-cart\"></i></text><br><br>";
        }
  echo    "</form>";
  echo    "<form action=\"comment.php\" method=\"POST\">";
  echo    "<input type='hidden' name='id' value='".$Userid."'/>";
  echo    "<input type='hidden' name='Useremail' value='".$UserEmail."'/>";
  echo    "<input type='hidden' name='product_id' value=\"".$pid."\" />";
  echo    "<input type='hidden' name='product_image_url' value=".$image." />";

  echo "<button class=\"w3-button w3-black\">View info<i class=\"fa fa-shopping-cart\"></i></button>";
  echo"</form>";

  echo   "</div>";
  echo "</div>";
  echo "</div>";

}


function price_filters($price) {
include "config.php";

$num = (int) $price;
$num_low = $num -100;
$Userid=$_POST['id'];
$Useremail=$_POST['Useremail'];


$sql_stttatement = "SELECT * FROM products WHERE products.P_Price <= '$num'  AND products.P_Price > '$num_low';";

$resultta=mysqli_query($db,$sql_stttatement);


while ( $row=mysqli_fetch_assoc($resultta)) {

  $image=$row['PImage'];
  $pid = $row['PID'];
  $Pname = $row['PName'];
  $price = $row['P_Price'];
  $im_size = $row['im_size']; 

  # code...

  

print_image($image , $pid, $Pname, $price , $im_size ); 


     //echo "<img src=".$image." alt=\"House\""." style=\"width:10%\">\"";
        
      
}



}



if (isset($_POST["price"]) && ($_POST["price"] == '100')) {

price_filters('100');

  
} 

elseif (isset($_POST["price"]) && $_POST["price"] == '200') {


   price_filters('200');
} 

elseif (isset($_POST["price"]) && $_POST["price"] == '300') {


   price_filters('300');
} 

elseif(isset($_POST["price"])) {

price_filters($_POST["price"]);


  
}


if(!(isset($_POST["Serch_name"])))
{

include "config.php";

$sql_sttatement = "SELECT * FROM products";

$resultt=mysqli_query($db,$sql_sttatement);
$image_array = array();


while ( $row=mysqli_fetch_assoc($resultt)) {

  $image=$row['PImage'];
  $pid = $row['PID'];
  $Pname = $row['PName'];
  $price = $row['P_Price'];
  $im_size = $row['im_size']; 

  # code...


print_image($image , $pid, $Pname, $price , $im_size );


      
}
}

//sorting

if (isset($_POST['sorting_type']))

{

$type = $_POST['sorting_type'];




include "config.php";



$sql_sttatement = "SELECT * FROM `products` ORDER BY `products`.`PName` ASC";

if ($type == "Alphabetical Order") {
  $sql_sttatement = "SELECT * FROM `products` ORDER BY `products`.`PName` ASC";
  
}
elseif ($type == "Price Lowest to Highest") {
  $sql_sttatement = "SELECT * FROM `products` ORDER BY `products`.`P_Price` ASC";
}
elseif ($type == "Reverse Alphabetical Order") {
  $sql_sttatement = "SELECT * FROM `products` ORDER BY `products`.`PName` DESC";
}
elseif ($type == "Price Highest to Lowest") {
  $sql_sttatement = "SELECT * FROM `products` ORDER BY `products`.`P_Price` DESC";
}
elseif ($type  == "Rate") {
  $sql_sttatement = "SELECT p.*, AVG(r.rate) as Prate FROM products p ,rate r WHERE  r.pid = p.PID  GROUP BY r.pid ORDER BY Prate DESC";
}



$resultt=mysqli_query($db,$sql_sttatement);
$image_array = array();


while ( $row=mysqli_fetch_assoc($resultt)) {

  $image=$row['PImage'];
  $pid = $row['PID'];
  $Pname = $row['PName'];
  $price = $row['P_Price'];
  $im_size = $row['im_size']; 

  # code...


print_image($image , $pid, $Pname, $price , $im_size ); 


}

}

if(isset($_POST['Serch_name']))
{
$Memberid=$_POST['id'];
$search=$_POST['Serch_name'];



mysql_connect("localhost","root","");
mysql_select_db("group_26");


$sql_sttatement = "SELECT * FROM products WHERE PName Like '%$search%'";


$resultt=mysqli_query($db,$sql_sttatement);

while ( $row=mysqli_fetch_assoc($resultt)) 
{


  $image=$row['PImage'];
  $pid = $row['PID'];
  $Pname = $row['PName'];
  $price = $row['P_Price'];
  $im_size = $row['im_size']; 

  

print_image($image , $pid, $Pname, $price , $im_size ); 

  

}

}


?>
  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>AcIKLAMA
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>Nazlı İrem Çamurlu </h3>
      <p class="w3-opacity">27064</p>   
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>Simay İldeniz</h3>
      <p class="w3-opacity">26441</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>Tunga Berkay Savcı</h3>
      <p class="w3-opacity">25381</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>Yusuf Araz</h3>
      <p class="w3-opacity">25479</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

</body>
</html>
