<html>
<body>
<?php
echo"Attendance Details";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));
$id=$_REQUEST['id'];
$empid=$_REQUEST['empid'];
$date=$_REQUEST['date'];
$time_in=$_REQUEST['time_in'];
$time_out=$_REQUEST['time_out'];
$query="insert into attendance values('$id','$empid','$date','$time_in','$time_out')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "ATTENDANCE DATA!!";
$var=mysqli_query($dbh,"select * from attendance");
echo"<table border size=1>";
echo"<tr><th>id</th> <th>empid</th> <th>date</th> <th>time_in</th> <th>time_out</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo"</table>";
?>
<a href="home.html">Click Here For Home Page</a>
</body>
</html>