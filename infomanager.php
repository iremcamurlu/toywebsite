<?php


include "config.php";


if (isset($_POST['id'])){

$id=$_POST['id'];
$Email=$_POST['Email'];







}





?>

<h1 style="color:red;">You can change the information you want below:
</h1>



<form action="Userupdate.php" method="POST">
Please enter your new Password:
<br />
<br /><input type="text" name="Password" placeholder="New Password"><br />
<br />

<input type="checkbox" name="Passcheck" > I dont want to change my Password
<br /> 
<br />
Please enter your new Address:<br /><br />


<input type="text" name="Address" placeholder="New Address">

<input type='hidden' name='id' value='<?php echo "$id";?>'/>
<input type='hidden' name='Email' value='<?php echo "$Email";?>'/>
<br />
<br />
<input type="checkbox" name="add" > I dont want to change my Address
<br/>
<br/>

<button> Change </button>
</form>



<form action="User_entered_mainpage.php" method="POST">
<input type='hidden' name='id' value='<?php echo "$id";?>'/>
<input type='hidden' name='Useremail' value='<?php echo "$Email";?>'/>
<br />

<button> Return to main page </button>
<br />
</form>

