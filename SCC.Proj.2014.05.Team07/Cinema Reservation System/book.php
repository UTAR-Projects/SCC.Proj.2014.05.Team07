<?php

	include "connect.php";
	$id=$_GET['id'];
	$sql="SELECT * FROM booking WHERE id='$id'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result,MYSQL_NUM);
		
?>
 <!DOCTYPE html PUBLIC "EN">

<html  >
  <head>
    <title>Cinemax Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
    <link href="css.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {
	font-size: 36px;
	font-weight: bold;
	color: #CCCCCC;
	font-family: Calibri;
}
.style4 {font-size: 30px; font-weight: bold; color: #CCCCCC; font-family: Calibri; font-style: italic; }
.style5 {font-size: 30px; font-weight: bold; color: #CCCCCC; font-family: Calibri; font-style: italic; }
-->
    </style>
</head>
  <body >


    <!--                  navigation                  -->
	<img src='Images/logo done.jpg' id='title'/>

    <ul id="nav">
      <li id="current">&nbsp;</li>
      <li id="current"><a href="index.html">Home</a></li>
      <li><a href="coming soon.html">Coming Soon</a></li>
      <li><a href="show time.html">Show Time</a></li>
      <li><a href="booking.html">Book Ticket</a></li>
      <li><a href="about us.html">About Us</a></li>
      <li><a href="contact us.html">Contact Us</a></li>
      <li><a href="Feedback.html">Feedback</a></li>
<li></li></ul>


    <!--                  main title                  -->

	<div id="container">
    <fieldset >
	<legend align="center"> Booking Detail </legend>
    
	
	<table width="311" border="1" align="center">
      <tr>
        <th colspan="2" scope="row">Online Booking </th>
      </tr>
      <tr>
        <th scope="row">Reg No: </th>
        <td><?php echo $row[0];?></td>
      </tr>
      <tr>
        <th width="91" scope="row">Name:</th>
        <td width="165"><?php echo $row[1];?></td>
      </tr>
      <tr>
        <th scope="row">Screen:</th>
        <td><?php echo $row[6];?></td>
      </tr>
      <tr>
        <th scope="row">Time</th>
        <td><?php echo $row[7];?></td>
      </tr>
      <tr>
        <th scope="row">No of Seat: </th>
        <td><?php echo $row[8];?></td>
      </tr>
      <tr>
        <th scope="row">Ticket Type: </th>
        <td><?php echo $row[5];?></td>
      </tr>
      <tr>
        <th scope="row">Charge</th>
        <td>
		<?php 
			$type=$row[5];
			if($type=="Gold")
			{
				echo (intval($row[8])*100);
				
			
			}
			else if($type=="Silver")
			{
								echo (intval($row[8])*50);
			}
			
		?>
		</td>
      </tr>
      <tr>
        <th scope="row">Time to Collect: </th>
        <td><?php echo $row[9];?></td>
      </tr>
      <tr>
        <th scope="row">No of Ticket: </th>
        <td><?php echo $row[8];?></td>
      </tr>
      <tr>
        <th colspan="2" scope="row">Thanks</th>
      </tr>
    </table>
    </div>
    <p align="center" class="style2">&nbsp;</p>
    <p align="center" class="style2">&nbsp;</p>
    <p align="center" class="style2"><marquee width="478" height="108">
    </marquee> &nbsp;</p>
  <div align="center">
    <center>
    </center>
	</fieldset >
  </div>
   <tr>
     <td height="25" align="center" valign="middle" >
</body>
</html>