<?php
    $Email = $_POST['email'];
    $Pwd   = $_POST['password'];
    $error  = "" ;  


    if(isset($_POST['submit'])){
        if($Email == "admin123@gmail.com" && $Pwd == "admin123")

            {   $error = "" ; 
                header("Location:admin_dashboard.php"); 
            }
            else
            {   header("Location:invalid.html");
            }

    }
    ?>