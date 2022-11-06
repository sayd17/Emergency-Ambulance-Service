<?php
    $userName = $_POST['userName'];
    $emailAddress = $_POST['emailAddress'];
    $pass = $_POST['pass']; 
    $driverName = $_POST['driverName'];
    $driverEmail = $_POST['driverEmail'];
    $driverNID = $_POST['driverNID'];
    $driverLicense = $_POST['driverLicense'];
    $driverPassword = $_POST['driverPassword'];  

    // database connection 
    $conn = new mysqli('localhost','root','','emergency_ambulance_service');
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

    if(isset($_POST['signup']))
    {
        $id = $_POST['id'];

        $query = "UPDATE 'user' SET userName = '$_POST[userName]' emailAddress = '$_POST[emailAddress]' pass = '$_POST[pass]'"
    }
?>