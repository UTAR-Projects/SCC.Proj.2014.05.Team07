<?php session_start();  ?><?php include'connect.php';?>
<?php

	if(isset($_POST["submit"]))
	{
		$st = "insert into film(Picturename,Genre,Language,Banner,Actors,Director,Country,Lyrics,Musician) values('$_POST[Picturename]','$_POST[Genre]','$_POST[Language]','$_POST[Banner]','$_POST[Actors]','$_POST[Director]','$_POST[Country]','$_POST[Lyrics]','$_POST[Musician]')";
		if(mysql_query($st)){
			echo "<script language='Javascript'>";
			echo "alert('Record Inserted')";
			echo "</script>";
		}
		else{
			echo mysql_error();
		}
	}
?>
<html>
<head>
<title>Now Showing </title>
</head>
<style type="text/css">
<!--
body {
	background-image: url(../Images/Admin/bg.gif);
}
.style9 {
	font-size: 36px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
<body>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"> </font></p>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"><u >Now Showing</u></font></p>
<p align="center"><a href="Movies.php"><img src="Button/movies.jpg" />
  <a href="feedbackreport.php"><a href="now showing.php"><img src="Button/Now showing.jpg"/>
<a href="reportall.php"><a href="report.php"><img src="Button/report all.jpg" border="0"/></a></p>
<p align="center">&nbsp;</p>

<p align="left">

<a href="insertnow showing.php"><img src="Button/insert.jpg" width="155" height="44"></a><br>
<a href="deletens.php"><img src="Button/delete.jpg" width="155" height="44"></a>
<p align="left">
</body>
</html>

