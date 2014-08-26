<?php
    include 'connect.php';
if(isset($_POST["username"]) && isset($_POST["pass"]))
{
	if(!$result = mysql_query("select * from login where Username='".$_POST["username"]."' and Password='".$_POST["pass"]."'"))
	//echo "1";
	
        echo mysql_error();

   	if(!mysql_num_rows($result)>0)
{
//echo "2";	
echo mysql_error();
}

    else
    {
	session_start();
	header('location:administrator.php?id='.session_id());

//echo "3";


	}
}
?>

 <!DOCTYPE html PUBLIC "EN">

<html  >
  <head>
    <title>Administrator Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {
	font-size: xx-large;
	font-weight: bold;
	color: #FF6633;
}
body {
	background-image: url(../Images/Admin/bg.gif);
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->
    </style>
</head>
  <body>


    <!--                  navigation                  -->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <p>
        <!--                  navigation                  -->
      </p>
      <p>&nbsp;</p>
      <p align="center" class="style3"><u>Administrator</u></p>
      <p align="center" class="style3">&nbsp;</p>
      <p align="center" class="style2"><font name="Times New Roman" size="4" ></p>
      <table width="348" height="41" border="3" align="center" >
        <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
          <td height="35"><div align="center"><font name="Times New Roman" size="6">Login </div></td>
         
        </tr>
      </table>
      <table width="348" height="187" border="3" align="center" bgcolor="#FF9900">
        <tr bordercolor="#000000" >
          <td><p align="center"><font name="Times New Roman" size="5">UserName :</font>
                  <input id="uid" name="username" type="text" size="20" />
            </p>
              <p align="center"><font name="Times New Roman" size="5">Password :</font>
                  <input id="pwd" type="password" name="pass" size="20" />
            </p>
            <p align="center">
                <input type="submit" value="Login" name="Submit" />
              &nbsp;&nbsp;
              <input type="reset" value="Reset" name="Reset" />
            </p>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <!--                  beginning of actual page                  -->
    </form>
    <p>&nbsp; </p>
    <p>&nbsp;      </p>


<?php
	include 'FOOTER.php';
	
?>
  </body>
</html>