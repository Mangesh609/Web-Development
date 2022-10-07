<?php
   $FFname = $_POST['ffirstName'];
   $FLname = $_POST['flastName'];
   $FEmail = $_POST['femail'];
   $Faddress = $_POST['faddress'];
   $Feedback = $_POST['feedback'];
   
   $con = new mysqli("localhost","root","","blewminds");
   $sql = "insert into feedbacks values('$FFname','$FLname','$FEmail','$Faddress','$Feedback');";
   
   $res = $con->query($sql);
   header("Location:faculty_dashboard2.html")
  ?>