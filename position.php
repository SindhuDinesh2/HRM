<html>
<body>
<?php
echo "Position Details Page";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));
$pos_id=$_REQUEST['pos_id'];
$deptno=$_REQUEST['deptno'];
$description=$_REQUEST['description'];
$rate=$_REQUEST['rate'];
$query="insert into position values('$pos_id','$deptno','$description','$rate')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "DATA ENTERED SUCCESSFULLY!!";
$var=mysqli_query($dbh,"select * from position");
echo"<table border size=1>";
echo"<tr><th>pos_id</th> <th>deptno</th> <th>description</th> <th>rate</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";
?>
<a href="home.html">Click Here For Home Page</a>
</body>
</html>