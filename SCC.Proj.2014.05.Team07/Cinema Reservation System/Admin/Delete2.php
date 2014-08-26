<?php session_start();?>
<?php
include 'connect.php';
?>
<?php

	if (isset($_POST["Delete"]))
	{
		$Time = $_POST['Time'];
		$sql = "delete from scr2 where Time='$Time'";
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
<title> Screen2 Delete </title>
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
</head>
<body>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"> </font></p>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"><u >Screen 2</u></font></p>
<p align="center">


<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
	
      <p>&nbsp;</p>
      <table border="5" width="411" align="left">
        <tr>
          <th colspan="2" bordercolor="#FFFFFF"> <strong><span class="style13"><font color="#FFFFFF" size="+3">Screen 2 </font></span></strong></th>
        </tr>
        <tr>
          <td colspan="6"></td>
        </tr>
        <tr>
          <th width="206"><span class="style14"><font color="#FFFF00" size="+2">Picture Name</font></span></th>
          <th width="189"><span class="style14"><font color="#FFFF00" size="+2">Time</font></span></th>
        </tr>";

		<?php
 	       $sql="select * from scr2";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       

	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Picture']."</font></td>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Time']."</font></td>";
		echo "</tr>";
	        }
			?>
	

      </table>
  <p>&nbsp;</p>
	    <table width="341" height="100" border="3" align="center" cellpadding="5" cellspacing="0">
      <tr>
	
        <td height="53" colspan="3" align="center"><font color="#FFFFFF" size="5">Screen 2 </span></td>
      </tr>
      <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Time&nbsp;*</span></td>
        <td width="3"> :</td>
        <td width="181">
		<select size="1" name="Time">
	  <?php
 	       $sql="select * from scr2";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		          echo "<option>".$row['Time']."</option>";

	        }

	    ?>
        </select></td>
      </tr>
  </table>

<center>
        <input type="submit" value="Delete" name="Delete">
        </p>
</center>		 
</form>
      <p align="right" class="style9"><a href="screen2.php"> Back</a></p>
</body>
</html>

