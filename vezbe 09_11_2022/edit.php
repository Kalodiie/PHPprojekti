<?php
    include "dbconnection.php";
    $eid = $_GET["editid"];

    $sql= "SELECT * from tblusers where ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$eid);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row=$result->fetch_assoc()){
?>

<h2>UPDATE</h2>
<p>Update your info</p>
<form action="update.php" method="POST">
    <label for="fname">First name:</label><br>
    <input type="text" name="fname" id="fname" value="<?php echo $row['FirstName'] ?>" required="TRUE"><br>
    <label for="fname">Last name:</label><br>
    <input type="text" name="lname" id="lname" value="<?php echo $row['LastName'] ?>" required="TRUE"><br>
    <label for="fname">Phone:</label><br>
    <input type="text" name="contactno" id="contactno" value="<?php echo $row['MobileNumber'] ?>" required="TRUE"><br>
    <label for="fname">Email:</label><br>
    <input type="text" name="email" id="email" value="<?php echo $row['Email'] ?>" required="TRUE"><br>
    <label for="fname">Address:</label><br>
    <textarea type="text" name="address" id="address" value="<?php echo $row['Address'] ?>" required="TRUE"></textarea><br>
    <input type="submit" value="Submit">
    <!-- <input type="hidden" id="custid" name=""> -->
</form>

<?php
    }
?>