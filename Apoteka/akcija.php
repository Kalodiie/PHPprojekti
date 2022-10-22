<style>
    <?php
        include 'style.css';
    ?>
</style>
<?php
if($_POST['nAspirin']!= ''){
    
    $aspirin = $_POST[ 'nAspirin' ] * 150;
}
else{
    $aspirin = 0;
}
if($_POST['nKafetin']!= ''){
    $kafetin = $_POST[ 'nKafetin' ] * 210;
}
else{
    $kafetin = 0;
}
if($_POST['nPanadol']!= ''){
    
$panadol = $_POST[ 'nPanadol' ] * 290;
}
else{
    $panadol = 0;
}

$survey = $_POST[ 'nInfo' ];
$cena = $aspirin + $kafetin + $panadol;
define( 'porez', 1.08 );
echo '<h2>Racun iz apoteke</h2><br>';
echo '<table>
<tr>
    <th>Lek</th><th>Kolicina</th><th>Cena</th>
</tr>';
if ( $aspirin > 0 ) {
    echo '<tr>
        <td>Aspirin</td><td>'.$aspirin/150 .'</td><td>'.$aspirin.'</td>
    </tr>';
}
if ( $kafetin > 0 ) {
    echo '<tr>
        <td>Kafetin</td><td>'.$kafetin/210 .'</td><td>'.$kafetin.'</td>
    </tr>';
}
if ( $panadol > 0 ) {
    echo '<tr>
        <td>Panadol</td><td>'.$panadol/290 .'</td><td>'.$panadol.'</td>
    </tr>';
}

echo '</table><br>
<p>Ukupna cena:'.$cena.'</p><p>Cena sa dodatim porezom:'.$cena*porez.'</p>';

echo '<button onclick="history.back()">Nazad na kupovinu</button>';
?>

