<?php
       include "connect.php";




echo "

<!DOCTYPE html PUBLIC 'EN'>
<html>
  <head>
	<title>Screen1 </title>
	<meta http-equiv='Content-Type' content='text/html; charset=us-ascii' />
    <link href='css.css' rel='stylesheet' type='text/css' />
    <style type='text/css'>
<!--
.style1 {
	font-size: 36px;
	color: #FFFFFF;
}
.style13 {
	font-size: xx-large;
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style14 {
	font-size: x-large;
	color: #FFFF00;
}
-->
    </style>
    <script type='text/JavaScript'>
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf('#')!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf('?'))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
  </head>
  <body onLoad='MM_preloadImages('Images/Show Time/first screen.JPG')'>
	<img src='Images/logo done.jpg' id='title'/>

  <!--                  navigation                  -->
	<ul id='nav'>
      <li id='current'><a href='index.html'>
      Home</a></li>
      <li><a href='coming soon.html'>Coming Soon</a></li>
      <li><a href='show time.html'>Show Time</a></li>
    <li><a href='booking.html'>Book Ticket</a></li>
      <li><a href='about us.html'>About Us</a></li>
	  <li><a href='contact us.html'>Contact Us</a></li>
	  <li><a href='feedback.html'>Feedback</a></li>

    </ul>
    <!--                  main title                  -->
    

    <p align='right' class='style1'><a href='screen 1.php'><img src='Images/Show Time/first screen.JPG' width='245' height='241' border='0' align='left'></a><a href='screen 3.php'><img src='Images/Show Time/thrid.JPG' width='243' height='241' border='0' align='right'></a></p>
    <p align='center'>
      <!--                  beginning of actual page                  -->
      <a href='screen 2.php'><img src='Images/Show Time/second.JPG' width='241' height='243' border='0'></a></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table border='5' width='411' align='center'>
	<tr>
		<th colspan='2' bordercolor='#FFFFFF'> <span class='style13'>Screen 1 </span></th>
	</tr>
	<tr><td colspan='6'></td>
	</tr>
                 <tr>

	   	   <th width='206'><span class='style14'>Picture Name</span></th>
		   <th width='189'><span class='style14'>Time</span></th>
	</tr>
	
	";
 	       $sql="select * from scr1";
	       $result=mysql_query($sql);
	       $totrec=mysql_num_rows($result);
		   
	       
	       while($row=mysql_fetch_array($result))
	       {

		
		echo "<tr>";

echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>";
echo "<a href='overview.php?name=".$row['Picture']."'>".$row['Picture']."</font></td></a>";
						echo "<td  align='center'><font name='Times New Roman' color='blue' size='5'>".$row['Time']."</font></td>";
		echo "</tr>";
	        }
	
	echo"
	         	
  </table></p>
	        

     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
  </body>
</html>";
?>