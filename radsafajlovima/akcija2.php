
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nazivFajla = $_POST['nTekst'];
    $ekstenzija = $_POST['nEkstenzija'];
    $sadrzaj = $_POST['nSadrzaj'];
    
    $punNaziv = $nazivFajla.".".$ekstenzija;
    $gajl = fopen($punNaziv,"w");
    fwrite($gajl,$sadrzaj);
    fclose($gajl);
}
    
?>