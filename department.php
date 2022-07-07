<html>
<body>
<?php
echo "Department Details";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));
$empid=$_REQUEST['empid'];
$deptname=$_REQUEST['deptname'];
$deptno=$_REQUEST['deptno'];
$dept_head=$_REQUEST['dept_head'];
$query="insert into department values('$empid','$deptname','$deptno','$dept_head')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "Department Data Entered Successfully!!";
$var=mysqli_query($dbh,"select * from department");
echo"<table border size=1>";
echo"<tr><th>empid</th> <th>deptname</th> <th>deptno</th> <th>dept_head</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";
?>
<a href="home.html">Click Here For Home Page</a>
</body>
</html>