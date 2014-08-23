<?php session_start();?>
<?php
include "connect.php";
?>
<?php

	if (isset($_POST['Delete']))
	{
		$Picturename = $_POST['Picturename'];
		$sql = "delete from film where Picturename='$Picturename'";
		if(mysql_query($sql))
		{
			echo "<script language='Javascript'>";
			echo "alert('Record Deleted Successfully')";
			echo "</script>";
		}
		else
		{
			echo "Record Not Deleted";	
		}
	}
?>
<html>
<head>
<title>Now Showing Delete </title>
<script language="javascript" src="function.js">
</script>
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
.style10 {
	color: #FFFFFF;
	font-size: x-large;
}
.style11 {color: #FF0000}
.style12 {font-size: x-large}
.style13 {font-size: medium}
.style14 {color: #FF0000; font-size: medium; }
.style16 {color: #FFFFFF; font-size: 36px; }
-->
</style>
<body>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"> </font></p>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"><u >Now Showing</u></font></p>
<p align="center">


<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" onSubmit="return checkempty(this)" name="form" >
	
      <p>&nbsp;</p>
      <table width="358" height="60" border="3" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td width="340" height="54" colspan="3" align="center"><p class="style10"><span class="style14">Picture Name</span><span class="style14"></span><span class="style11"><span class="style12">&nbsp;</span>&nbsp;:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="Picturename">
          </p>
          </td>
        </tr>
      </table>
      <p align="center">
        <input type="submit" value="Delete" name="Delete" >
      </p>
      <table border="5" width="1219" align="left">
        <tr>
          <th colspan="10" bordercolor="#FFFFFF"> <strong><span class="style13"><font color="#FFFFFF" size="+3">Now Showing </font></span></strong></th>
        </tr>
        <tr>
          <td colspan="6"></td>
        </tr>
        <tr>
          <th width="155"><span class="style14"><font color="#FFFF00" size="+2">Picture Name</font></span></th>
          <th width="135"><span class="style14"><font color="#FFFF00" size="+2">Genre</font></span></th>
		  <th width="125"><span class="style14"><font color="#FFFF00" size="+2">Language</font></span></th>
		  <th width="155"><span class="style14"><font color="#FFFF00" size="+2">Banner</font></span></th>
		  <th width="130"><span class="style14"><font color="#FFFF00" size="+2">Actors</font></span></th>
		  <th width="137"><span class="style14"><font color="#FFFF00" size="+2">Director</font></span></th>
		  <th width="96"><span class="style14"><font color="#FFFF00" size="+2">Country</font></span></th>
		  <th width="125"><span class="style14"><font color="#FFFF00" size="+2">Lyrics</font></span></th>
		  <th width="95"><span class="style14"><font color="#FFFF00" size="+2">Musician</font></span></th>
		 
        </tr>
		<?php
 	       $sql="select * from film";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Picturename']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Genre']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Language']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Banner']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Actors']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Director']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Country']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Lyrics']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Musician']."</font></td>";

		echo "</tr>";
	        }
	
		?>
  </table>
  <p>&nbsp;</p>
	    <center></p>
        </center>		 

</form>
      <p align="right" class="style9">&nbsp;</p>
      <p align="right" class="style9">&nbsp;</p>
      <p align="right" class="style9">&nbsp;</p>
      <p align="right" class="style9"><span class="style16"><a href="now showing.php">Back</a></span></p>
</body>
</html>

