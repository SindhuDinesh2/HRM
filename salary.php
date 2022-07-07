<html>
<body>
<?php
echo "Salary Details";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'HRM') or die(mysqli_error($dbh));
$empid=$_REQUEST['empid'];
$pos_id=$_REQUEST['pos_id'];
$salary=$_REQUEST['salary'];
$tax=$_REQUEST['tax'];
$tax_cal=null;
$total_salary=null;
$query="insert into salary values('$empid','$pos_id','$salary','$tax','$tax_cal','$total_salary')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "DATA ENTERED SUCCESSFULLY!!";
$var=mysqli_query($dbh,"select * from salary");
echo"<table border size=1>";
echo"<tr><th>empid</th> <th>pos_id</th> <th>salary</th> <th>tax</th> <th>tax_cal</th> <th>total_salary</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> </tr>";
}
echo"</table>";
?>
<a href="home.html">Click Here For Home Page</a>
</body>
</html>