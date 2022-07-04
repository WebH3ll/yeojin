<?php

    include "lib.php";

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "select * from board where email='$email' and pwd='$pwd' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);
  
    
    Header("Location: index.php"); 
    

