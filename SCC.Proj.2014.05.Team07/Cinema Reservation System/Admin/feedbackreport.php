<?php
      	 include 'connect.php';
?>



<html>
<head>
<title> Feedback Report </title>
</head>
<style type="text/css">
<!--
body {
	
	background-color: #000000;
}
.style1 {color: #FF0000}
.style2 {
	font-size: 18px;
	color: #FF0000;
	font-weight: bold;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: xx-large;
}
.style4 {color: #FFFFFF}
.style5 {font-size: xx-large}
-->
</style>
     <body>
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2 style3">FEED BACK </p>
     <table border = "10" width = "800" align = "center">
			<tr >
			<th class="style1" align="center"> Name </th>
			<th class="style1" align="center"> Email id</th>
			<th class="style1" align="center"> Contact </th>
			<th class="style1" align="center"> Commments </th>
  </tr>

	
		<?php
 	       $sql="select * from feedback";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
			

			echo "<td> <font align='center' color='white'>".$row['Name']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Email']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Contact']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Comments']."</font></td>";
		echo "</tr>";
	        }
		?>
     </table>
     <p>&nbsp;</p>
     <p align="right" class="style4"><a href="report.php" class="style5">Back</a>	</p>
     </body>
</html>


		   
		
      