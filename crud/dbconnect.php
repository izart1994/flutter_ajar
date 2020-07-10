<?php

    $servername = "localhost";
    $databasename = "otaiwebs_flutter";
    $username = "otaiwebs_flutter";
    $password = "wPOwLRQ!rM[[";

    $con = mysqli_connect($servername,$username,$password,$databasename);

    if( !$con){
        die("Error in connection " . mysqli_connect_error());
    }
?>