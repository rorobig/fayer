<?php
   include('../config/config.php');
      
        $mail = $_POST['mail'];
        $newmail = $_POST['newm'];
     
        $confirmnewmail= $_POST['cm'];
        
        
        
//         $query="INSERT INTO customer VALUES (null, '$userid','$username','$password','$lastname','$firstname','$adress','$country','$tel','$cel')";
// $sql = mysql_query("UPDATE registration SET password = '$newpassword' WHERE email = '$mail'");   

        $query = "UPDATE customer SET email='$newmail' WHERE email= '$mail'";


        if ($mysqli->query($query) == true) {
        echo "query success";
        header( "refresh:2;url=../studentsystem.php" );

        }else{

        echo "error";
        header( "refresh:2;url=../mail.php" );
        }
     
 ?>