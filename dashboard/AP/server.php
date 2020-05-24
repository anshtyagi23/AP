<?php
    $name = $_POST["name"];
    $rollno = $_POST["rollno"];
    $branch = $_POST["branch"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $connection = new mysqli('localhost','root','','AP_Project');
    if($connection->connect_error){
        die('Connection Failed');
    }
    else{
        $stmt = $connection->prepare("Insert into registration(name,rollno,branch,email,phone) values(?,?,?,?,?)");
        $stmt->bind_param("sissi",$name,$rollno,$branch,$email,$phone);
        $stmt->execute();
        echo "Done";
        $stmt->close();
        $connection->close();
    }
?>