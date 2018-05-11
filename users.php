<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php 
//if(!isset($_SESSION['user_id'])){
//	header('Location: index.php'); 
//}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>users page</title>
	<link rel="stylesheet"  href="css/main.css">
</head>
<body>
<header>
<div class="appname">User Management System</div>
<--error-->
<div class="logedin">Welcom <?php echo $_SESSION['first_name']; ?> <a href="logout.php">Log out</a></div>
 
</header>

<main>
	
   <h1>Users <span><a href="add_user.php">+ Add New</a></span></h1>
   <table class="masterlist">
   	   <tr>
   	   	 <th>First name</th>
   	   	 <th>Last name</th>
   	   	 <th>Last login</th>
   	   	 <th>Edit</th>
   	   	 <th>Delete</th>

   	   </tr>

   </table>

</main>
</body>
</html>