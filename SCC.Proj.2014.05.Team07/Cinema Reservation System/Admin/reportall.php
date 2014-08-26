<?php
	 include 'check.php';
	    if(isset($_GET[id]))
	    {
        		$id=$_GET[id];
    	    }
echo "

<html>
<head>
<title>Report All </title>
</head>
<style type='text/css'>
<!--
body {
	background-image: url(images/Admin/bg.gif);
}
.style1 {color: #FF0000}
.style2 {
	font-size: 18px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
     <body>
     <p align='center' class='style2'>&nbsp;</p>
     <p align='center' class='style2'>Screen 1 </p>
     <table border='1' width='33%' align='center'>
	<tr><td colspan='6'></td>
	</tr>
                 <tr>
	   <th width='148' align='center'><span class='style1'>Time</span></th>
	   <th width='168'><span class='style1'>Picture</span></th>
	</tr>
	";
			include "connect.php";
 	       $sql="select * from scr1";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
			

			echo "<td> <font align='center' color='red'>".$row['Time']."</font></td>";
			echo "<td> <font align='center' color='red'>".$row['Picture']."</font></td>";
		echo "</tr>";
	        }
echo "
	

     </table>
         </body>
</html>
";

echo "

<html><style type='text/css'>
<!--
body {
	background-image: url(images/bg.gif);
}
.style1 {color: #FF0000}
.style2 {
	font-size: 18px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
     <body>
     <p align='center' class='style2'>&nbsp;</p>
     <p align='center' class='style2'>Screen 2 </p>
     <table border='1' width='33%' align='center'>
	<tr><td colspan='6'></td>
	</tr>
                 <tr>
	   <th width='148' align='center'><span class='style1'>Time</span></th>
	   <th width='168'><span class='style1'>Picture</span></th>
	</tr>
	";
			include "connect.php";
 	       $sql="select * from scr2";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
			

			echo "<td> <font align='center' color='red'>".$row['Time']."</font></td>";
			echo "<td> <font align='center' color='red'>".$row['Picture']."</font></td>";
		echo "</tr>";
	        }
echo "
	

     </table>
         </body>
</html>
";

echo "

<html><style type='text/css'>
<!--
body {
	background-image: url(images/bg.gif);
}
.style1 {color: #FF0000}
.style2 {
	font-size: 18px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
     <body>
     <p align='center' class='style2'>&nbsp;</p>
     <p align='center' class='style2'>Screen 3 </p>
     <table border='1' width='33%' align='center'>
	<tr><td colspan='6'></td>
	</tr>
                 <tr>
	   <th width='148' align='center'><span class='style1'>Time</span></th>
	   <th width='168'><span class='style1'>Picture</span></th>
	</tr>
	";
			include "connect.php";
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
echo "
	

     </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
</body>
</html>
";

?>
