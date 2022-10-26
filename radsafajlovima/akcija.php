<?php

    $mojfajl = fopen("test.txt",'r');
    /*Citanje fajla fread($nazivFajla,duzinaCitanja)
    //echo fread($mojfajl,filesize("test.txt"));*/
    while(!feof($mojfajl)){
    echo fgets($mojfajl);
        }
    fclose($mojfajl);

    $napravi = fopen("citanje.txt","w") or die("Unexpected error");
    $tekst = "Pliva patka preko save";
    fwrite($napravi,$tekst);
    fclose($napravi);
    $ajd = fopen("citanje.txt","r");
    echo "<br>";
    while(!feof($ajd))
    {
        echo fgetc($ajd);
    }
    

?>