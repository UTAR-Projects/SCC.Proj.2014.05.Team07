<?php
		session_start();

       include "connect.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Screen3</title>
</head>

<body background="../Images/Admin/bg.gif">
<p align="center"><font size="7" color="#FFFFFF" style="text-align:center"><u >Screen 3 </u></font></p>
<p align="center">
<p align="center">
<a href="Movies.php?id=$_GET[id]"><img src="Button/movies.jpg" />
<a href="feedbackreport.php?id=$_GET[id]"><a href="now showing.php?id=$_GET[id]"><img src="Button/Now showing.jpg"/>
<a href="reportall.php?id=$_GET[id]"><a href="report.php"><img src="Button/report all.jpg" border="0"/></a></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p></p>
  <table width="1134">
    <tr>
       <td width="236"><p>
             <p align="left">
	<a href="screen1.php"><img src="Button/screen1.jpg" /></br>
	<a href="screen2.php"><img src="Button/screen2.jpg" /></br>
	<a href="screen3.php"><img src="Button/screen3.jpg"/></br>
		<p align="left">&nbsp;</p>
</td>
       <td width="709"><table border="5" width="411" align="center">
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
      </table></td>
       <td width="173"><p>
         <p align="right">
<a href="insert3.php"><img src="Button/insert.jpg" /></br>
<a href="update3.php"><img src="Button/update.jpg" /></br>
<a href="delete3.php"><img src="Button/delete.jpg"/></br>
<p align="right">&nbsp;</p></td>
</td>
    </tr>
</table>
   <center>
      <label></label>
      <label></label>
  </center>

    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>
