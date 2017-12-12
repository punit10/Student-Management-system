<?php
function showresult($branch,$rollno)
{
	include('dbcon.php');

	$qry="SELECT * FROM `student` Where `branch`='$branch' AND `rollno`='$rollno' ";

	$run=mysqli_query($con,$qry);
	
    
    // echo "no of record found " .mysqli_num_rows($run);
	if(mysqli_num_rows($run)>0)
	{

		$data=mysqli_fetch_assoc($run);
		?>
		
		<table align="center" border="1" style="width: 50%; margin-top: 30px">
		<tr>
			<th colspan="3" > Student Details </th>
		</tr>
		<tr>
		 <th> Roll no</th> <td> <?php echo $data['rollno'];?> </td> 
		 <td rowspan="6" align="center"> 
		
		   <img src="dataimg/<?php echo $data['image']; ?>" style="max-width:200px; max-height: 400px; padding-right: : 30px;" /> </td>
		  </tr>
		 
		 <tr>
		<th> Name</th> <td> <?php echo $data['name'];?> </td>
		</tr>
		<tr>
		<th> Branch</th> <td> <?php echo $data['branch'];?> </td>
		</tr>
		<tr>
		<th> Marks</th> <td> <?php echo $data['marks'];?>  %</td>
		</tr>
		
		<tr>
		<th> City</th> <td> <?php echo $data['city'];?> </td>
		</tr>
		<tr>
		<th> Parents Contact</th> <td> <?php echo $data['pcont'];?> </td>
		</tr>


		</table>
		<?php 
	}
	else
	{
		echo "<script> alert('No Student Found.'); </script> ";
	}
}

?>