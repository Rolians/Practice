<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	$error="";
	if(empty($name)){
			$error.="<li>Enter Name</li>";
		}elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$error .= "<li>Only letters and white space allowed in student's name</li>"; 
    	}
		if(empty($address)){
			$error.="<li>Enter address</li>";
		}
		if(empty($email)){
			$error.="<li>Enter email</li>";
		}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$error .= "Email id is not valid";
		}
		if(empty($contact)){
			$error.="<li>Enter contact</li>";
		}elseif (!preg_match("/^[0-9]{10}$/", $contact)){
			$error.="<li>Please enter only numbers!</li>";
		}
	if(empty($error))
	{

		$user ='root';
		$pass ="";
		$database="dbassign";
		$host='localhost';

		$con = mysqli_connect($host ,$user ,$pass ,$database);
		$query="Insert into faculty (name,address,contact,email,role) values ('$name','$address','$contact','$email','$role')";
		if(mysqli_query($con  ,$query ))
		{
			echo "data inserted successfully";
		}else
		{
		echo "Data is not inserted";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>

		select {
    	width: 30%;
    	padding: 10px 20px;
    	border: none;
    	border-radius: 4px;
    	background-color: #f1f1f1;
}
		input[type=text], select {
         width: 100%;
    	padding: 12px 20px;
    	margin: 8px 0;
    	display: inline-block;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	box-sizing: border-box;
}
	</style>
</head>
<body style="background-color: Azure;">
<center>
	<form action="" method="POST">
	<table>
		<h2>ADD THE FACULTY</h2>
		<tr>
			<td ><b>Name of the faculty: </td>
			<td><input type="text" name="name" value="<?php if(isset($name)){ echo $name; }?>" placeholder="faculty's name..."></td>
		</tr>
		<tr>
			<td><b>Address :-</b></td>
			<td><textarea style="display: inline-block; box-sizing: border-box;" name="address" rows="5" cols="40" value="<?php if(isset($address)){ echo $address; }?>" placeholder="Faculty's Address"></textarea>
		</tr>
		<tr>
			<td><b>Contact NO: </td>
			<td><input type="text" name="contact" value="<?php if(isset($contact)){ echo $contact; }?>" placeholder="Faculty's contact"> </td>
		</tr>
		<tr>
			<td style="font-size:100%;"><b>E-mail</td>
			<td><input type="text" name="email" value="<?php if(isset($email)){ echo $email; } ?>" placeholder="Faculty's Email"></td>
		</tr>
		<tr>
			<td><b>Role</td>
			<td>
    		<select id="role" name="role">
    		<option value="Director">Director</option>
    		<option value="Director">Head of Department</option>
      		<option value="Instructor">Instructor</option>
      		<option value="Sub-Instructor">Sub-Instructor</option>
    		</select>
		</td>
		</tr>
		<tr><br>
			<td><input type="submit" name="submit"></td>
			<td><input type="reset" name="RESET"></td>
		</tr>
	</table>
		<ul style="color:red;">
		<?php
 		if(isset($error)){
		echo $error;
	    }?>
</center>
</body>
</html>