<?php 
        $mysqli = new mysqli("localhost","root","","fakultet");
        if($mysqli->error){
            die("Greska: " .$mysqli->error);
        }
    ?>