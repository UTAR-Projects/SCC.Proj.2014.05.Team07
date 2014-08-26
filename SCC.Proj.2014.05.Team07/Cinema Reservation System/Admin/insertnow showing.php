<?php session_start();  ?><?php include'connect.php';?>
<?php

	
	if(isset($_POST["submit"]))
	{
		$st = "insert into film(Picturename,Genre,Language,Banner,Actors,Director,Country,Lyrics,Musician) values('".$_POST["Picturename"]."','".$_POST["Genre"]."','".$_POST["Language"]."','".$_POST["Banner"]."','".$_POST["Actors"]."','".$_POST["Director"]."','".$_POST["Country"]."','".$_POST["Lyrics"]."','".$_POST["Musician"]."')";
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
<title> Now Showing  Insert</title>
<script language="javascript" src="function.js"></script>
		

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
.style10 {
	font-size: 36px;
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"> </font></p>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"><u >Now Showing</u></font></p>
<p align="center">

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" onSubmit="return checkempty(this)" name="form">
	
	<table width="341" height="406" border="3" align="center" cellpadding="5" cellspacing="0">
      <tr>
	
        <td colspan="3" align="center"><font color="#FFFFFF" size="5">
        <div align="center">Now Showing </div></td>
      </tr>
      <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Movie Name &nbsp;</span></td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Picturename" type="text" >        </td>
	  </tr>
      <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Director<br>
        </span></td>
        <td width="3"> :</td>
        <td width="181">
        <input name="Director" type="text">        </td>
      </tr>
	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Lyrics&nbsp;</span></td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Lyrics" type="text" >        </td>
	  </tr>
	  	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Musician &nbsp;</span></td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Musician" type="text" >        </td>
	  </tr>
	  	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Actors&nbsp;</span></td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Actors" type="text" >        </td>
	  </tr>
	  	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Language&nbsp;</span></td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Language" type="text" >        </td>
	  </tr>
	  	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Genre&nbsp;</span></td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Genre" type="text" >        </td>
	  </tr>
	  	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Banner</td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Banner" type="text" >        </td>
	  </tr>
	  	  <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Country</td>
        <td width="3"> :</td>
        
		<td width="181">
		 <input name="Country" type="text" >        </td>
	  </tr>
  </table>

<center>
        <input type="submit" value="Submit" name="submit">
         <input type="reset" value="Reset" name="reset">
</center>		


<div  class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="now showing.php">&nbsp;<u>Back</u></a> </div>

</form> 	
      <p align="right" class="style9"><a href="now showing.php"></a></p>
</body>
</html>

