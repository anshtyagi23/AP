<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
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
        $stmt->close();
        $connection->close();
    }
?>
<center><button class="btn btn-pill btn-red">DONE!</button></center>
</div>
</body>
</html>