<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$date=$_POST['date'];
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
		}/*elseif (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{4}$/", $contact)){
			$error.="<li>Please enter only numbers!</li>";
		}*/
		elseif (!preg_match("/^[0-9]{10}$/", $contact)){
			$error.="<li>Please enter only numbers in the contact!</li>";
		}
	if(empty($error))
	{
		$user ='root';
		$pass ="";
		$database="dbassign";
		$host='localhost';

		$con = mysqli_connect($host ,$user ,$pass ,$database);
		$query="Insert into student (name,address,contact,email,date) values ('$name','$address','$contact','$email','$date')";
		if(mysqli_query($con  ,$query ))
		{
			echo "data inserted successfully";
		}else
		{
		echo "Data is not inserted";
		}
	}
	else {
		echo "data is not inserted";
	}
	

		
}

?>
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
</head>>
<body style="background-color:lavender;">
<center>
<form action="" method="POST">
	<table>
		<tr>
			<td ><b>Student Name: </td>
			<td><input type="text" name="name" value="<?php if(isset($name)){ echo $name; }?>" placeholder="Student's name..."></td>
		</tr>
		<tr>
			<td><b>Address :-</b></td>
			<td><textarea style="display: inline-block; box-sizing: border-box;" name="address" rows="5" cols="40" value="<?php if(isset($address)){ echo $address; }?>" placeholder="Student's Address"></textarea>
		</tr>
		<tr><br>
			<td><b>Contact NO: </td>
			<td><input type="text" name="contact" value="<?php if(isset($contact)){ echo $contact; }?>" placeholder="Student's contact"> </td>
		</tr>
		<tr><br>
			<td><b>E-mail</td>
			<td><input type="text" name="email" value="<?php if(isset($email)){ echo $email; } ?>" placeholder="Student's Email"></td>
		</tr>
		<tr><br>
			<td><b>Date of Admission</td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr><br><br>
			<td><input type="submit" name="submit"></td>
			<td><input type="reset" name="RESET"></td>
		</tr>
	</table>
		<ul style="color:red;">
		<?php
 		if(isset($error)){
		echo $error;
	    }
	    ?>
</form>
</center>
</body>
</html>