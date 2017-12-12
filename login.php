<?php 
 session_start();
      if(isset($_SESSION['uid']))
      header('location:admin/admindash.php');

?>

<html>
<head>
<title> Admin Login </title>
</head>
<body bgcolor="#cff987">
<form action="login.php" method="POST">
<h2 align="center"> Admin Login </h2>
<table align="center">
  <tr>
   <td> Username </td>
  <td> <input type="text" name="username" required></td> 
  </tr>
<tr>
   <td> Password </td>
  <td> <input type="password" name="password" required></td> 
  </tr>

  <td colspan="2" align="center"> <input type="submit" name="login" Value="Login"> </td>

</table>
</form>
</body> 
</html>
<?php
include("dbcon.php");
   if(isset($_POST['login']))
   {
   	$username = $_POST['username'];
   	$password = $_POST['password'];

   	$qry = "SELECT * FROM `admin` WHERE  `username`= '$username' AND `password`='$password'  ";
  
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    
    
    if($row<1)
       {	
      	  ?> 
      	   	<script>
      		  alert('Incorrect Username or Password !!!'); 
      		   //window.open('login.php','_self');
			       </script>
         <?php

        }
	  else
	     {
	 		  $data = mysqli_fetch_assoc($run);
      
        $id=$data['id'];
        $username=$data['username'];
      
     
      $_SESSION['uid'] = $id;
      $_SESSION['username'] = $username;
      ?>
      <script type="text/javascript">
      window.location="admin/admindash.php";
      </script>
      <?php
      exit();

	    }

   }
//include('footer.php');
?>