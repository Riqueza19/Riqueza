<?php

    $email = $_POST['email'];

    //Database connection
    $conn = new mysqli('localhost', 'root','','test');
    if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into registraion(email) 
       values(?)");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      echo "registration Successfully...";
      $stmt->close();
      $conn->close();
    }
    

?>
