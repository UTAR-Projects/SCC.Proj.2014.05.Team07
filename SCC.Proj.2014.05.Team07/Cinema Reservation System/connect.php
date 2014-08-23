<?php
    if(!mysql_connect('localhost','root'))
        echo mysql_error();
    if(!mysql_query('use cinema'));
        echo mysql_error();
?>
