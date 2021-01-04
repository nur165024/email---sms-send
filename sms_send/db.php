<?php

    $mySqli = new mysqli('localhost','root','','iot_asset_ms');
    // Check connection
    if ($mySqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mySqli -> connect_error;
        exit();
    }

?>