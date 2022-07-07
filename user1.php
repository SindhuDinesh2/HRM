<!doctype html>
<html>
<head>
<title>Login</title>

    <style> 
       body {
  background-image:url('3.jpg');
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size: cover;
}
    </style>
</head>
<body>
<h1>Enter the id and password </h1>
     
  
<form action="" method="POST">
id:<input type="number" name="id"><br><br>
password:<input type="password" name="password"><br><br>	
<input type="submit" value="Login" name="submit" >
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['id']) && !empty($_POST['password'])) {
	$id=$_POST['id'];
	$password=$_POST['password'];
	

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'HRM') or die("cannot select DB");

	$query=mysqli_query($con,"SELECT * FROM user1 WHERE id='".$id."' AND password='".$password."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbid=$row['id'];
	$dbpassword=$row['password'];
	
	}

	if($id == $dbid && $password == $dbpassword)
	{
	session_start();
	$_SESSION['sess_id']=$id;

	/* Redirect browser */
	header("Location: home.html");
	}
	} else {
	echo "Invalid id or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>
<br><br><br>

</body>
</html>