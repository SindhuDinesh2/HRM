<html>
<body>
<?php
echo"Admin Login";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));
$id=$_REQUEST['id'];
$password=$_REQUEST['password'];
$query="insert into admin values('$id','$password')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "Logged in Successfully!!";
$var=mysqli_query($dbh,"select * from admin");
echo"<table border size=1>";
echo"<tr><th>id</th> <th>password</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> </tr>";
}
echo"</table>";
?>
<a href="home.html">Click Here For Home Page</a>
</body>
</html>