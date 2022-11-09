<?php
    include("dbconnection.php");
    $vid = $_GET["viewid"];
    $sql = "SELECT * from tblusers where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$vid);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
?>

<table>
                <tr><th>Ime</th><th>Last Name</th><th>Email</th><th>Mobile number</th><th>Creation date</th></tr>
                
              <tr>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['MobileNumber']; ?></td>
                <td><?php echo $row['CreationDate']; ?></td></tr>
</table>