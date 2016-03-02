<?php
   include('../config/config.php');
      
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $newpassword= password_hash($newpassword , PASSWORD_DEFAULT);

        
        
//         $query="INSERT INTO customer VALUES (null, '$userid','$username','$password','$lastname','$firstname','$adress','$country','$tel','$cel')";
// $sql = mysql_query("UPDATE registration SET password = '$newpassword' WHERE email = '$mail'");   

        $query = "UPDATE customer SET u_pass='$newpassword' WHERE email= '$mail'";


        if ($mysqli->query($query) == true) {
        echo "query success";
        header( "refresh:2;url=../studentsystem.php" );

        }else{

        echo "error";
        header( "refresh:2;url=../pasw.php" );
        }
     
 ?>