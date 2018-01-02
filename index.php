<!DOCTYPE HTML> 
<html>
<head>
 <title> Student Management System</title>
 </head>
 <body bgcolor="#00ffff">
<h3 align="right" style ="margin-right: 20px;"><a href="login.php"> Admin Login</a> </h3>
<h1 align ="center" > Welcome to Student Management System</h1>
<form method="post" action="index.php">

<table align="center" border="0" style="margin-top: 20px;">
<tr> <th colspan="2" align="center"> Student Information</th>
</tr>	
<tr>
    <td align="left">Select branch</td>
     <td>
     <select name="branch">
      <option value="CS" selected=""> CS </option>
       <option value="EC"> EC </option>
       <option value="ME"> ME </option>
       <option value="EE"> EE </option>
      
    </select>
    </td>
</tr>
   <tr>
      <td align="right">Enter Roll no</td>
        <td> <input type="text" name="rollno" required> </td> 
   </tr>
    <tr>
      <td colspan="2" align="left" style=""> <input type="submit" name="submit" Value="Show Details">
      </td>
    </tr>

</table>
</form>
</body>
</html>
<?php 
 
 if(isset($_POST['submit']))
 {

  $branch=$_POST['branch'];
  $rollno=$_POST['rollno'];
  include('dbcon.php');
  include('function.php');

showresult($branch,$rollno);
 }



//include('footer.php');
 ?>