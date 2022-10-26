<?php
    $fajl = "osoba.xml";
    $xml = simplexml_load_file($fajl) or die("Unexpected error!");

    echo "Ime: ". $xml->name."<br>";
    echo "Godine: ". $xml->age."<br>";
    echo "Vrsta: ". $xml->species."<br>";
    echo "Roditelji: ". $xml->parents->mother." i " .$xml->parents->father."<br>";

    
?>