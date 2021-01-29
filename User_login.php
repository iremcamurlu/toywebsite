<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;
        color: black;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Member Login Form </h1> </center>   
        <form action="alreadyaccount.php" method="POST"> 
        <div class="container">   
            <label>User Email : </label>   
            <input type="text" placeholder="Enter User Email" name="Email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="Password" required>    
            <button>Login</button>


       
    
        </form> 

        <form action="User_sign_up_last.php" method="POST"> 

            <button>Sign Up </button>

        </form>
        </div>  

         <form action="noacccountbasket.php" method="POST">
            <button>Proceed Without Login </button>

        </form> 
        
</body>     
</html> 

<?php

echo '<script language="javascript">';
echo 'alert("If you enter your password wrong you will redirect to login page")';
echo '</script>';


?>