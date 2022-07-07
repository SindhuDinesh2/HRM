<html>
<body>
<?php
	echo"Create Account";
	$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));


	$id=$_REQUEST['id'];
	$password=$_REQUEST['password'];
	$confirm_password=$_REQUEST['confirm_password'];
	$email=$_REQUEST['email'];
	$firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
	$phone=$_REQUEST['phone'];


	$query="insert into create_account values('$id','$password','$confirm_password','$email','$firstname','$lastname','$phone')";
	$query1="insert into user1 values('$id','$password')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "ACCOUNT CREATED SUCCESSFULLY!!";


	$var=mysqli_query($dbh,"select * from create_account");
	echo"<table border size=1>";
	echo"<tr><th>id</th> <th>password</th> <th>confirm_password</th> <th>email</th> <th>firstname</th> <th>lastname</th> <th>phone</th></tr>";

	while ($arr=mysqli_fetch_row($var))
	{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
	}

	echo"</table>";
	?>
	<a href="user1.php">Click Here For User Login Page</a>
	<a href="index.html">Click Here For index Page</a>
</body>
</html>