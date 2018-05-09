<?php

require_once('inc/connection.php');
?>

<html>
<head>

<title>log_in</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body>

 <div class="login">
 
    
	<form action="index.php" method="post">
	 <fieldset>
	
	   <legend><h1>Log In</h1></legend>
	    <p class="error">invalid user name or password</p>
         <p>
		   <label for="">User name</label>
		   <input type="text" name="username" id="" placeholder="email address">
		 
		 </p>	   
	     <p>
		   <label for="">Password</label>
		   <input type="text" name="password" id="" placeholder="password">
		 
		 </p>	   
	     <p>
		   <button type="submit" name="submit" >Log In</button>
		 </p>	   
	       
	    
	   
	     
	   
	   
	   
	   
	
	
	 </fieldset>
 
    </form>
 <div><!--login-->



</body>


</html>