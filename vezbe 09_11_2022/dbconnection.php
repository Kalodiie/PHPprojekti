<?php
    $conn = new mysqli("localhost","root","","phpcrud");

    if($conn -> connect_errno)
    {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>