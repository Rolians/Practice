<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	if(!empty($name))
	{
		$user ='root';
		$pass ="";
		$database="dbassign";
		$host='localhost';

		$con = mysqli_connect($host ,$user ,$pass ,$database);
		$query="Insert into student (name,address,contact,email,date) values ('$name','$address','$email','$date')";
	}if(mysqli_query($con  ,$query ))
	{
			echo "data inserted successfully";
	}else
	{
		echo "Data is not inserted";
	}
}	

?>
<html>
<body>
<center>
<form action="" method="POST">
	<table>
		<tr>
			<td >User Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" rows="5" cols="40"></textarea>
		</tr>
		<tr><br>
			<td>Contact NO: </td>
			<td><input type="text" name="cotact"></td>
		</tr>
		<tr><br>
			<td>E-mail</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr><br>
			<td>Date of Admission</td>
			<td><input type="text" name="date"></td>
		</tr>
		<tr><br>
			<td><input type="submit" name="submit"></td>
		</tr>


	</table>
</form>
</center>
</body>
</html>