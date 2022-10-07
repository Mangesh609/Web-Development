<?php
    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Pwd   = $_POST['password'];
    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Aadhar = $_POST['aadhar'];

    $con = new mysqli("localhost","root","","blewminds");
    $sql = "insert into faculty_details values('$Fname','$Lname','$Pwd','$Email','$Mobile','$Aadhar');";
    $res = $con->query($sql);

    header('location:admin_dashboard.php')

?>