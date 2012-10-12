<?php

$uname="root";
$passwd="";

$cname=$_POST['cname'];
$to=$_POST['turnover'];
$loc=$_POST['location'];
$nemp=$_POST['noofemployees'];

$conn=mysqli_connect("sql107.byethost8.com", "b8_11523229", "niteshis", "b8_11523229_statsdb");

$query="insert into companies(cname, location, turnover, noofemployees) values('".$cname."','".$loc."', ".$to.",".$nemp.")";

//echo $query;

/*$res=mysqli_query($conn, $query);

while($row=mysqli_fetch_assoc($res)) {
	extract($row);
	echo $cname;
}*/

$res = mysqli_query($conn, $query);

header("Location: home.php");

?>
