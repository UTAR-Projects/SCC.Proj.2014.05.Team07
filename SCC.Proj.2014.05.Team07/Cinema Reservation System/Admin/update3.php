<?php session_start();  ?>
<?php include'connect.php';?>
<?php
	if(isset($_POST["Time"]) && isset($_POST["Picture"]))
	{
	$Time= $_POST["Time"];
	$Picture= $_POST["Picture"];
	}
	if(isset($_POST["Update"]))
	{
		$st= "update scr3 set Time='$Time',Picture='$Picture' where Time='$Time' ";
		if(mysql_query($st)){
			echo "<script language='Javascript'>";
			echo "alert('Record Updated')";
			echo "</script>";
		}
		else{
			echo mysql_error();
		}
	}
?>

<html>
<head>
<title>Screen3 Update </title>
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
-->
</style>
<body>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"> </font></p>
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"><u >Screen 3</u></font></p>
<p align="center">

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" onSubmit="return checkempty(this)" name="form">
	
	<table border="5" width="411" align="left">
      <tr>
        <th colspan="2" bordercolor="#FFFFFF"> <strong><span class="style13"><font color="#FFFFFF" size="+3">Screen 3 </font></span></strong></th>
      </tr>
      <tr>
        <td colspan="6"></td>
      </tr>
      <tr>
        <th width="206"><span class="style14"><font color="#FFFF00" size="+2">Picture Name</font></span></th>
        <th width="189"><span class="style14"><font color="#FFFF00" size="+2">Time</font></span></th>
      </tr>
	  	
		
		  <?php
 	       $sql="select * from scr3";
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
	<table width="341" height="143" border="3" align="center" cellpadding="5" cellspacing="0">
      <tr>
	
        <td colspan="3" align="center"><font color="#FFFFFF" size="5">Screen 3 </span></td>
      </tr>
      <tr>
        <td width="115" height="41"><font color="#FFFF00" size="3">Time&nbsp;*</span></td>
        <td width="3"> :</td>
        <td width="181">
		<select size="1" name="Time">
	<?php
 	       $sql="select * from scr3";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		          echo "<option>".$row['Time']."</option>";

	        }

	    ?>
        </select></td>
      </tr>
      <tr>
        <td width="115" height="61"><font color="#FFFF00" size="3">Picture&nbsp;*</span></td>
        <td width="3"> :</td>
        <td width="181">
        <input name="Picture" type="text" >        </td>
      </tr>
  </table>

<center>
        <input type="submit" value="Update" name="Update">
         <input type="reset" value="Reset" name="reset"></p>
</center>		 
</form>
      <p align="right" class="style9"><a href="screen3.php"> Back</a></p>
</body>
</html>

