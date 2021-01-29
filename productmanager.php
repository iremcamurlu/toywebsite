<?php 


include  "config.php";

include "products.php";


?> 



<p style="font-size:2vw">Delete From Table With ID:
</p>
<br>

<form action="deleteproduct.php" method="POST">
	<select name="ids">
<?php


	$sql_command="SELECT PID from products";

	$myresult=mysqli_query($db,$sql_command);
	

	while ($id_rows=mysqli_fetch_assoc($myresult) )
	{
		$id=$id_rows['PID'];

		echo "<option value=$id>".$id."</option>";
	}

?>
	</select>


	<button>
		DELETE	
	</button>

</form>

<p style="font-size:2vw">Insert Into Table With ID:
</p>
<br>

<form action="insertproduct.php" method="POST">
Product Name
<input type="text" name="Product_Name" placeholder="Type Product Name">
<br>
<br>
Product Category
<input type="text" name="Product_Category" , placeholder="Type Category" >
<br>
<br>
Product Price
<input type="text" name="Product_Price" , placeholder="Type Price" >
<br>
<br>
Product Stock
<input type="text" name="Product_Stock", placeholder="Type Stock Count"  >
<br>
<br>
Product Image
<input type="text" name="ProductImage", placeholder="Type Image Path" >
<br>
<br>
<button> 
Insert
</button>


</form>


<form action="index.php" method="POST">
      <p><button class="w3-button w3-light-grey w3-block">Log Out</button></p>
    </form>



