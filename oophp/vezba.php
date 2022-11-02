<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

        include "zaposleni.php";

        
        class Osoba extends Zaposleni{
            public $ime;
            public $godine;
            public function __construct($ime="NN",$godine=35)   //Ovako se pravi konstruktor
            {
                $this->ime = $ime;
                $this->godine = $godine;
            }  
            public function getInfo(){
                return "Cao ja se zovem {$this->ime} i imam {$this->godine} godina";
            }
              
        }

        $z1 = new Zaposleni("Mikan",64);
        var_dump($z1);
        //instanciranje klase
        $o1 = new Osoba;
        //Pristup promenjivim unutar klase
        $o1->ime="Milovan";
        //Dodavanje svojstva instanci klase
        $o1->adresa = "Kneza Milosa 32";
        $o2 = new Osoba;
        var_dump($o1->adresa);
        echo "<br>";
        var_dump($o2);
        echo $o2->getInfo();
        echo "<br>";
        $o3 = new Osoba("Niksa",42);
        var_dump($o3);
        
    ?>
</body>
</html>