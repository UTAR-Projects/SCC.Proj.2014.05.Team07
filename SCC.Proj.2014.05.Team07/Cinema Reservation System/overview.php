<?php

	 include 'connect.php';
	    
        		$name=$_GET["name"];

echo "	       	
<!DOCTYPE html PUBLIC EN>
<html>
  <head>
    <title>Overview</title>
    <link href='css.css' rel='stylesheet' type='text/css' />
    <style type='text/css'>
<!--
.style36 {
	font-size: xx-large;
	font-weight: bold;
	color: #FFFFFF;
}
.style40 {color: #FFFF00; font-size: x-large; }
-->
    </style>
</head>
  <body>


    <!--                  navigation                  -->


    
    <p align='center'><span class='style36'>Over View </span></p>
    <p align='center'>&nbsp;</p>
    <p align='center'>&nbsp;</p>
    <p>
      <!--                  main title                  -->
    </p>
       
";
	  
 	       $sql="select * from film where Picturename='$name'";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
	       
	       while($row=mysql_fetch_array($result))
	       {
		   		$temp=$row['Image']; 
					
		   		?>
<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	color: #FFFFFF;
}
-->
</style>

	
					<table border='5' width='600' align='center'>
        <tr bordercolor='#FFFFFF'>
				
	   <td width='219'></div><td width='227'></th>
	   </tr>
	</tr>
	   </tr>
	</tr>
					<?php			
				   echo "<td><font name='Times New Roman' color='yellow' size='5'>Movie Name</font></th>"; 
				   echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Picturename']."</font></td></tr>";
				   
	   			   echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Director</font></th>"; 
		     	   echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Director']."</font></td></tr>";

		     	    echo "<td><font name='Times New Roman' color='yellow' size='5'>Lyrics</font></th>"; 
			    	echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Lyrics']."</font></td>";			

					echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Musician</font></th>"; 
					echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Musician']."</font></td></tr>";

				   echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Actors</font></th>"; 
				   echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Actors']."</font></td></tr>";

			   	   echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Language</font></th>"; 
		    	   echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Language']."</font></td></tr>";
				   
				   echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Genre</font></th>"; 
		           echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Genre']."</font></td></tr>";

				   echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Banners</font></th>"; 
			       echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Banner']."</font></td></tr>";

				   echo "<tr><td><font name='Times New Roman' color='yellow' size='5'>Country</font></th>"; 
		           echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Country']."</font></td></tr>";

					
					
					
					
			echo "</tr>";
	        }
			
echo"

</table>


    
  </body>
  
</html>";
?>
<div align="right"><a href="show time.html" class="style1 style1"><u>Back</u></a></div>
