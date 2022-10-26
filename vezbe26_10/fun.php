<?php
    /*
    $add = function($valone,$valtwo){
        return $valone + $valtwo;
    };
    echo $add(1,2);
    */

    /*
    $add = fn($valone,$valtwo)=> $valone+$valtwo;
    echo $add(1,2);
    */

    /*
    declare (strict_types=1);
    function addNumbers(int $a,int $b)
    {
        
        return $a+$b;
    }
    echo addNumbers(5,"5 days");
    */

    /*
    declare(strict_types=1);
    function addNumbers(float $a,float $b):int{
        return (int)($a+$b);
    }
    echo addNumbers(1.2,5.2);
    */


    //klasican
    
    declare(strict_types=1);
    $x = $_POST['prvi'];
    $y = $_POST['drugi'];
    function sabiranje($a,$b){
        return $a+$b;
    };
    //bezimena oduzima
    $oduzimanje = function($a,$b){ return ($a-$b);};
    
    //arrow mnozi deli
    $mnozi = fn($a,$b)=>($a*$b);
    $deli = fn($a,$b)=>($a/$b);
    
    echo sabiranje($x,$y)."<br>";
    echo $oduzimanje($x,$y)."<br>";
    echo $mnozi($x,$y)."<br>";
    echo $deli($x,$y)."<br>";

?>