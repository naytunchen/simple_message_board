<?php

// Connet to MySQL
$con = mysqli_connect("localhost", "root", "m3m3th3tm0n", "messageboard");

// Test Connection
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
?>
