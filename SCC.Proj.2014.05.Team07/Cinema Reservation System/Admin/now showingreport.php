<?php
       include "connect.php";

?>
<html>
<head>
<title>Now Showing Report </title>
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
.style4 {color: #000000}
.style5 {font-size: xx-large}
-->
</style>
<body>
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2 style3">Now Showing </p>
<table border = "10" width = "1220" align = "center">
	   <tr >
			<th width="139" height="22" align="center" class="style1"> Movie Name </th>
			<th width="137" align="center" class="style1"> Director</th>
			<th width="126" align="center" class="style1"> Lyries </th>
			<th width="121" align="center" class="style1"> Musician </th>
			<th width="137" align="center" class="style1"> Actors </th>
			<th width="104" align="center" class="style1"> Language </th>
			<th width="122" align="center" class="style1"> Genre </th>
			<th width="134" align="center" class="style1"> Banner </th>
			<th width="124" align="center" class="style1"> Country </th>

  </tr>

	
			<?php
 	       $sql="select * from film";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		echo "<tr>";
			

			echo "<td> <font align='center' color='white'>".$row['Picturename']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Genre']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Language']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Banner']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Actors']."</font></td>";	
			echo "<td> <font align='center' color='white'>".$row['Director']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Country']."</font></td>";
			echo "<td> <font align='center' color='white'>".$row['Lyrics']."</font></td>";						
			echo "<td> <font align='center' color='white'>".$row['Musician']."</font></td>";									

		echo "</tr>";
	        }
	
	?>
</table>
     <p align="right" class="style4"><a href="report.php" class="style1 style5">Back</a>	</p>
</body>
</html>


		   
		
      