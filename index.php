<html>

<link href="CSS/fik.css" rel='stylesheet' type="text/css">
 
<body> 

<div class="loginbox">

<img src="Assets/pic.jpg" class="avatar">

<h1>Login Form</h1><br>

<form action="" method="POST">
<p>Login Type:</p>

<select name="typ">

<option value="a">Employee

<option value="b">Administrator

</select><br>
<p>Username</p>

<input type="text" placeholder="Enter Username" name="unm" required>
<br><br>

<input type="submit" value="Login" name="btn">

 </div>
  
</body>
  
<?php
   
    if(isset($_POST["btn"]))
   
     {
   
        $sl=$_POST["typ"];
       
        if($sl=="a")
      
          {
         
             $t=strtoupper($_POST['unm']);
  
             include("connection.php");
  
             include('directsearch.php');
	
             show($t);
         
   
        }
 
       else if($sl=="b")
  
          {
       
           $t=strtoupper($_POST['unm']);
 
           if($t=="ADMIN")
  
           {
            
            echo "<script> window.open('homepage.php');</script>";
        
           }
			
       else 
			
           echo "<script> alert('Incorrect UserName') </script>";
        
    }  
    
  else
 
        echo "<script> alert('Error in Entry') </script>";
   
 }
  
  ?>
	
 </html>