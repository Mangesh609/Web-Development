<?php 
 $Email = $_POST['email'] ; 
 $Pwd   = $_POST['password'];
 $con   = new mysqli("localhost","root","","blewminds");
 if($con->connect_errno)
 {
    echo'connection failed'; 
 }
 else{
      echo 'connection successfull';
 }
 $sql   = "select * from faculty_details where EMAIL_ID = '$Email' AND PASSWORD = '$Pwd';";
 $res   = $con->query($sql);
$count  = mysqli_num_rows($res);
 if( $count )
 {
    header("Location:faculty_dashboard.html");
 }
 else 
 {
   header("Location:invalid2.html");
 }
?>