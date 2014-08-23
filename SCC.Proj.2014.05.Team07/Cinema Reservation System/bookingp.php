<?php
include "connect.php";

$name=$_POST['name'];
$add=$_POST['add'];
$mno=$_POST['mno'];
$pno=$_POST['pno'];
$reg=$_POST['reg'];
$screen=$_POST['screen'];
$time=$_POST['time'];

$noticket=$_POST['noticket'];


if($time=='1')
{
	$ctime="2:00 PM";
}
else if($time=='2')
{
	$ctime="5:00 PM";
}
else
{
	$ctime="8:00 PM";
}		

$id=0;





if($time=='1')
{
	$time="3:00 to 6:00";
}
else if($time=='2')
{
	$time="6:00 to 9:00";
}
else
{
	$time="9:00 to 12:00";
}		
//echo $screen;
//echo $add;
//echo $mno;
//echo $pno;
//echo $reg;

$sql="INSERT INTO booking VALUES('$id','$name','$add','$mno','$pno','$reg','$screen','$time','$noticket','$ctime')";
$result=mysql_query($sql) or die(mysql_error());

$sql="SELECT MAX(id) from  booking";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);

header("Location:book.php?id=$row[0]");


?>
