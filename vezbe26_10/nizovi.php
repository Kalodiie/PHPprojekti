<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $skola = array(
            "ucenik"=>array("Ucenik","Matematika","Programiranje","Web programiranje"),
            "matematika"=>array("Milos",5,5,3),
            "programiranje"=>array("Luka",3,4,4),
            "webprogramiranje"=>array("Aleksa",3,2,5)
        );
        echo "<table border>";
        foreach($skola as $key => $value){
            echo "<tr>";
            foreach($value as $val)
            {
                echo "<td>$val</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>