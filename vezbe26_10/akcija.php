<?php
    $a = $_POST['prvi'];
    $b = $_POST['drugi'];
    $c = $_POST['treci'];
    if($a==''){$a=0;}
    if($b==''){$b=0;}
    if($c==''){$c=0;}

    function srednji($a=0,$b=0,$c=0){
        $rez = ($a+$b+$c)/3;
        echo $rez;

    }
    srednji($a,$b,$c);

?>