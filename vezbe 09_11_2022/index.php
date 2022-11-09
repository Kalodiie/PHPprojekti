<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <a href="form.php">Insert data</a>
    <br><br>
    
    <form action="search.php" method="post">
    <select name="pretraga[]" style="width:150px;" id="">
        <option value="FirstName">ime</option>
        <option value="Email">email</option>
    </select>
    <input type="text" name="polje_p" >
    <input type="submit" value="Search data" name="trazi">
    </form>
    
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
            include("dbconnection.php");
            $sql = "SELECT * from tblusers";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['MobileNumber']; ?></td>
                <td><?php echo $row['CreationDate']; ?></td>
                <td>
                    <a href="read.php?viewid=<?php echo($row['ID']); ?>">Read</a>
                    <a href="edit.php?editid=<?php echo($row['ID']); ?>">Edit</a>
                    <a href="delete.php?viewid=<?php echo($row['ID']); ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>