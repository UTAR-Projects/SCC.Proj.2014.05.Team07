<html>
<head>
<title>Feedback</title>
</head>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {	color: #FF0000;
	font-weight: bold;
	font-size: 35px;
}
.style4 {color: #FF0000; font-weight: bold; font-size: 30px; }
.style5 {color: #FFFFFF; font-size: x-large; }
body {
	background-image: url(Images/admin/bg.gif);
}
-->
</style>

<div align="center">
  <p class="style4">Cinemax Cinema </p>
  <p class="style2">THANK YOU FOR YOUR FEED BACK </p>
  <p class="style1"><img src="Images/Feedback/CARD-10.gif" width="350" height="277" /></p>
  <p class="style1"><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/MAIL.gif" width="45" height="52" /><img src="IMAGES/Feedback/BIRD.gif" width="62" height="68" /></p>
  <p class="style1">&nbsp;</p>
  <p align="right" class="style5"><a href="index.html">Back To Home</a> </p>
  <p class="style1">&nbsp;</p>
</div>

  <?php
	$Name= $_POST["Name"];
	$Email= $_POST["Email"];
	$Contact= $_POST["Contact"];
	$Comments= $_POST["Comments"];

	include "connect.php";
	$qins= "insert into feedback (Name,Email,Contact,Comments)values('$Name','$Email','$Contact','$Comments')";
                  
	$rs=mysql_query($qins);
	if(!$rs)
	{
		echo "incorrect query<br><br>";
		echo $qins;
	}
	else
	{
		echo "<a href='feedback11.php'>";
	}	
	
	
?> 


</p>
<p>&nbsp;	</p>
<p class="style4">&nbsp;</p>
