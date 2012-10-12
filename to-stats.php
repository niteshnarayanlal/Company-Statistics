<?php

$uname="root";
$passwd="";

$conn=mysqli_connect("sql107.byethost8.com", "b8_11523229", "niteshis", "b8_11523229_statsdb");

$query="select cname, turnover from companies";
$res=mysqli_query($conn, $query);
$i=0;
while($row=mysqli_fetch_assoc($res)) 
{	
 	extract($row);
    $barlength=500;
    echo $cname.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="poll.gif" width="'.$turnover/100*$barlength.'" height="15"><br>';
	$i++;
}

?>
