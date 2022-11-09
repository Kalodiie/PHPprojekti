<?php
    include "dbconnection.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contno = $_POST['contactno'];
    $email = $_POST['email'];
    $add = $_POST['address'];
    
    $stmt = $conn->prepare("INSERT INTO tblusers (FirstName,LastName,MobileNumber,Email,Address) VALUES (?,?,?,?,?)");
    $stmt->bind_param("ssiss",$fname,$lname,$contno,$email,$add);
    $stmt->execute();

    header("location:index.php");

?>