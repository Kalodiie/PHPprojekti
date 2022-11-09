<?php
    include "dbconnection.php";
    if(isset($_POST['trazi']))
    {
        foreach ($_POST['pretraga'] as $select) {
            echo $select;
        }
    }
    $upit3 = "SELECT * from tblusers where $select like '".$_POST["polje_p"]."%'";
    if(!($rez = $conn->query($upit3)))
    {
        print("Nije moguce izvrsiti upit");
        die("cao");
    }
    if(!$red=$rez->fetch_assoc())
    {
        print("nema tog korisnika!");
        die("cao");
    }
    else{ ?>

<table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                mysqli_data_seek($rez,0);
                while($row=$rez->fetch_assoc())
                {
                
            ?>
            <tr>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['MobileNumber']; ?></td>
                <td><?php echo $row['CreationDate']; ?></td>
            </tr>
        </tbody>
    </table>

    <?php }} ?>