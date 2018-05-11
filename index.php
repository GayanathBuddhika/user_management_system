<?php session_start(); ?>
<?php

require_once('inc/connection.php');
?>
<?php 

//check the form submission
if(isset($_POST['submit'])){

	$errors=array();
//check if the username and password has been entered
  if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
  
   $errors[]='username is missing / invalid';

  } 
  if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
  
   $errors[]='password is missing / invalid';

  } 
//check if there are any error in the form
  if(empty($errors)){
   //save username and password into variable
  	$email=mysqli_real_escape_string($connection, $_POST['email']);
    $password=mysqli_real_escape_string($connection, $_POST['password']);
    $hash_password=sha1($password);
   //prepar database query
    $query="SELECT * FROM user
            WHERE email='{$email}'
            AND password='{$hash_password}'
            LIMIT 1";
    $result_set=mysql_queary($connection, $query);  
    //check if the user is valid
    if($result_set){
       //query succesful
       if(mysqli_num_rows($result_set)==1){

        //valid user found
        $user=mysqli_fetch_assoc($resultset);
        $_SESSION["user_id"]=$user['id'];
        $_SESSION['fitst_name']=$user['first_name'];
        //redirect to user.php
        header('Location: users.php');
       }else{

        $errors[]='invalid username or password';

       }

    }else{

    	$errors[]='database query failed';
    }  
  
  
 


  }
  

}

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
	   <?php 
          if(isset($errors) && !empty($errors)){

             echo ' <p class="error">invalid user name or password</p>';

          }
    
	    ?>
      <?php 
        if (isset($_GET['logout'])) {
          # code...
          echo ' <p class="info">you are success fully log out from the sit</p>';
        }
    
       ?>
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