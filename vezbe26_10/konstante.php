<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP primer sa stringovima</title>
</head>
<body>
    <h1>PHP primer sa stringovima</h1>
    <?php
        echo "<h2>Stringovi</h2>";
        $naziv = "Napredni veb dizajn";

        echo "Broj karaktera u stringu 'Napredni veb dizajn' je: " . strlen($naziv);
        echo "<br>";

        echo "Broj reci: " .str_word_count($naziv);
        echo "<br>";

        echo "Obrnuti redosled: " . strrev($naziv);
        echo "<br>";

        echo "Rec 'veb' u stringu 'Napredni veb dizajn' se nalazi na: " . strpos($naziv,'veb');
        echo ".poziciji <br>";

        echo str_replace('vece','jutro','Dobro vece!');
        echo "<br><br>";

        $tekst = <<<FRAZA
        "Ovo je 
        'HEREDOC' nacin"
        FRAZA;

        echo "<br><br><h2>Konstante</h2>";
        define("CESTITKA","Zelimo Vam srecnu i uspesnu novu godinu");
        echo CESTITKA;
        echo "<br>";

        define("CESTITKA","Zelimo Vam srecnu i uspesnu novu godinu",true);
        echo cestitka;

        echo "<br>";
        function mojTest()
        {
            echo CESTITKA . "Ovo je poziv konstante iz funkcije";
        }
        mojTest();
        echo "<br>";
        echo $tekst;
    ?>
</body>
</html>