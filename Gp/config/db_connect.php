<?php 
    $mysqli = new MySQLi ("localhost","root","","voetbalclubphp");
    if(mysqli_connect_errno())
    {
        trigger_error("fout my verbinden: ".$mysqli->error);
    }
?>