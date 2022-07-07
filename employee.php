<html>
<body>
<?php
echo "Employee Details";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));
$empid=$_REQUEST['empid'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$birthdate=$_REQUEST['birthdate'];
$query="insert into employee values('$empid','$name','$address','$gender','$birthdate')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "Employee Data Entered Successfully!!";
$var=mysqli_query($dbh,"select * from employee");
echo"<table border size=1>";
echo"<tr><th>empid</th> <th>name</th> <th>address</th> <th>gender</th> <th>birthdate</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo"</table>";
?>
<a href="home.html">Click Here For Home Page</a>
</body>
</html>