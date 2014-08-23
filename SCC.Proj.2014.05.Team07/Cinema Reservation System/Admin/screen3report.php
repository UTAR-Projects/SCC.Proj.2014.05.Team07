<?php
       include "connect.php";
?>	   

<html>
<head>
<title>Screen3</title>
</head>
<style type="text/css">
<!--
body {
	background-image: url(images/bg.gif);
	background-color: #000000;
}
.style2 {
	font-size: 18px;
	color: #FF0000;
	font-weight: bold;
}
.style3 {
	font-size: xx-large;
	color: #FFFFFF;
}
.style4 {color: #FFFF00}
.style5 {font-size: x-large}
.style6 {
	font-size: xx-large;
	color: #FF0000;
}
-->
</style>
     <body>
 <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style3">Screen 3 </p>
     <table border="3" width="33%" align="center">
	<tr><td colspan="6"></td>
	</tr>
                 <tr>
	   <th width="148" align="center"><span class="style4 style5">Time</span></th>
	   <th width="148" align="center"><span class="style5 style4">Picture</span></th>
	</tr>
		  <?php
 	       $sql="select * from scr3";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
			

			echo "<td> <font align='center' color='red'>".$row['Time']."</font></td>";
			echo "<td> <font align='center' color='red'>".$row['Picture']."</font></td>";
		echo "</tr>";
	        }
	
		?>
     </table>
          <p>&nbsp;</p>
		        <p align="right" class="style7"><u><a href="report.php" class="style6">Back</a></u></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
</body>
</html>


		   
		
      