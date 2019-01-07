<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			border-spacing: 5px;
			padding: 2px;
			border-spacing: 2px;
		}
	</style>
</head>
<body>
<center>
<center>
<form action="" , method="POST">
	<table>
	<tr>
		<td><b> Enter the name </td>
		<td><input type="text" name="name" id="name"></td>
    </tr>
	</table>
</form>
</center>
<?php		
	if(isset($_POST)==TRUE && empty($_POST)==FALSE)
		{
		$Name = $_POST['name'];
		$user ='root';
		$pass ="";
		$database="dbassign";
		$host='localhost';

		$con = mysqli_connect($host ,$user ,$pass ,$database);
		$query = "select * from student where name = '$Name'";
		if($result = mysqli_query($con,$query))
		{
			if(mysqli_num_rows($result)>0)
			{
				echo "<table>";
				echo "<tr>";
				echo "<th>User name </th>";
				echo "<th>Address </th>";
				echo "<th>Contact </th>";
				echo "<th>Email </th>";
				echo "<th>Date of Adm </th>";
				echo "</tr>";
				while ($rows = mysqli_fetch_assoc($result)) 
				{
					echo "<tr>";
					echo "<td>". $rows['name']."</td>";
					echo "<td>". $rows['address']."</td>";
					echo "<td>". $rows['contact']."</td>";
					echo "<td>". $rows['email']."</td>";
					echo "<td>". $rows['date']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
			else{
				echo "No record is found";
			}
	
		}
	}
?>

</body>
</html>
