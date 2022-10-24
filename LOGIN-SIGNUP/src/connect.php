<?php
    $userName = $_POST['userName'];
    $emailAddress = $_POST['emailAddress'];
    $password = $_POST['password']; 
    $driverName = $_POST['driverName'];
    $driverEmail = $_POST['driverEmail'];
    $driverNID = $_POST['driverNID'];
    $driverLicense = $_POST['driverLicense'];
    $driverPassword = $_POST['driverPassword'];  

    // database connection 
    $conn = new mysqli('localhost','root','','registraioninfo');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(userName, emailAddress, password, driverName, driverEmail, driverNID, driverLicense, driverPassword) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssiss",$userName, $emailAddress, $password, $driverName, $driverEmail, $driverNID, $driverLicense, $driverPassword);
        $stmt->execute();
        echo "Registration Successfull";
        $stmt->close();
        $conn->close();
    }
?>