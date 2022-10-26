<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
        $x = 5;  //global
        $y = 10; //global
        function mojTest()
        {
            
            global $x,$y;
            $y = $x+$y;
            
        }
        mojTest();
        echo $y;
    */


    /*
        function birajKafu($tip="kapucino")
        {
            return "Izabran je: $tip";
        }
        echo birajKafu("Machiatto");
        echo "<br>";
        echo birajKafu();
    */


        function fu(){
            echo "Ovo je fu()<br>";
        }
        function bar($arg=''){
            echo "Ovo je bar(); argument je bio $arg <br>";
        }    
        $funk = 'fu';
        $funk();
        $funk='bar';
        $funk('test');

    ?>
</body>
</html>