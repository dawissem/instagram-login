<?php

// Connect to database
        $host = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "ajout";

        $conn = new mysqli($host, $userName, $password, $dbName);

      
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "INSERT INTO users ( email, password) VALUES ( '$email', '$password')";
        $result = $conn->query($sql);
        if ($result) {
            header('Location:Merci.html');

            $successMsg = "New record created successfully";
            echo"    $successMsg"  ;   }
             else {
            $errorMsg = "Error: ". $sql. "<br>". $conn->error;
            echo"    $errorMsg"  ;   }
             
        
        $conn->close();


?>