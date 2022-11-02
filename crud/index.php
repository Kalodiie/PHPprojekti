<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:10px;
        }
        form{
            background-color: #0df;
        }
        fieldset{
            padding:0px;
        }
    </style>
</head>
<body>
    <?php 
       include "connection.php";
    ?>
    <h2>Unos azuriranje podataka o studentima.</h2>
    <fieldset>
        <legend>Studenti</legend>
        <form name="Studenti" action="index.php" method="post">
        <table>
            <tr>
                <td>
                    Broj indeksa:
                </td>
                <td>
                    <input type="text" name="brind" id="" value="<?php echo $brind ?>">
                </td>
            </tr>
            <tr>
                <td>prezime:</td>
                <td>
                    <input type="text" name="prezime" id="" value="<?php echo $prezime?>">
                </td>
                <td>ime:</td>
                <td>
                    <input type="text" name="ime" id="" value="<?php echo $ime?>">
                </td>
            </tr>
            <tr>
                <td>status:</td>  
                <td>
                    <?php
                        if($status=="S"){?>
                        <label >B
                        <input type="radio" name="status" id="" value="B">
                        S <input type="radio" name="status" id="" value="S" checked="checked">
                        </label>
                    <?php
                        } else{ ?>
                        <label>
                            B <input type="radio" name="status" id="" value="B" checked="checked">
                            S <input type="radio" name="status" id="" value="S">
                        </label>
                        <?php
                        }?>
                </td>
                <td>sifra smera:</td>
                <td>
                    <input type="text" name="sifra" id="" value="<?php echo $red["sifra"] ?>">
                </td>
            </tr>

        </table>

        <br>
        <input type="submit" value="dodaj" name="dodaj"><br>
        <input type="submit" value="trazi" name="trazi">
        </form>
    </fieldset>

    <?php
    if(isset($_POST["dodaj"])){
        if (isset($_POST["brind"])){
            $brind = $_POST["brind"];
        }
        if (isset($_POST["prezime"])){
            $prezime = $_POST["prezime"];
        }
        if (isset($_POST["ime"])){
            $ime = $_POST["ime"];
        }
        if (isset($_POST["status"])){
            $status = $_POST["status"];
        }
        if (isset($_POST["sifra"])){
            $sifra = $_POST["sifra"];
        }

        echo $brind."<br>";
        echo $ime."<br>";
        echo $prezime."<br>";
        echo $status."<br>";
        echo $sifra."<br>";
        
        $upitdod = "insert into student (ime,prezime,brojIndeksa,sifra,status) values ('$ime','$prezime','$brind','$status','$sifra')";
        

        if(!$rezd=$mysqli->query($upitdod)){
            print("Ne moze se izvrsiti upit!<br>");
            die($mysqli->errno);
        }
        $message = "Slog je dodat";
    }


    if(isset($_POST["trazi"])){
        if (isset($_POST["brind"])){
            $brind = $_POST["brind"];
        }
        if (isset($_POST["prezime"])){
            $prezime = $_POST["prezime"];
        }
        if (isset($_POST["ime"])){
            $ime = $_POST["ime"];
        }
        if (isset($_POST["status"])){
            $status = $_POST["status"];
        }
        if (isset($_POST["sifra"])){
            $sifra = $_POST["sifra"];
        }

        echo $brind."<br>";
        echo $ime."<br>";
        echo $prezime."<br>";
        echo $status."<br>";
        echo $sifra."<br>";
        
        $upitpretraga = " select * from student where prezime LIKE '".$_POST['prezime']."'";
        $rez = $mysqli->query($upitpretraga);
        if(!$rez){
            print("Ne moze se izvrsiti upit!<br>");
            die($mysqli->error);
        }
        if(!($red=$rez->fetch_assoc())){
            print("Nema trazenog studenta po prezimenu!<br>");
        }
        else{
            $brind=$red["brojIndeksa"];
            $prezime=$red["prezime"];
            $ime=$red["ime"];
            $status=$red["status"];
            $sifra=$red["sifra"];
            
        print_r($red);
        }
    }

        ?>
</body>
</html>