<?php
    include 'connect.php';

    session_start();
    if(isset($_GET))
        if(session_id()!= $_GET[id])
            header("Location:login.php");


?>
