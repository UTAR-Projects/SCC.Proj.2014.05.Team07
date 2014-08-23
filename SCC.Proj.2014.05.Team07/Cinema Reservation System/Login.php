<?php
    include 'connect.php';
	if(!$result = mysql_query("select * from login where Username='$_POST[usrnm]' and Password='$_POST[pass]'"))
        echo mysql_error();
    if(!mysql_num_rows($result)>0)
        echo mysql_error();
    else
    {
		session_start();
		header("location:administrator.php?id=".session_id());
	}
?>
