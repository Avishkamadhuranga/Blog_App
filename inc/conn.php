<?php
    
    //defining host
    $host = "localhost";
    //define user name
    $username = "root";
    //define password
    $password = "";
    //define database
    $database = "blogapp";
  
    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
       die("Database connection faild" . mysqli_error($conn));
    }
    else{
      //  echo "Database connection success!!";
    }


?>