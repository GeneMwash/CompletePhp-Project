<?php
// check if the button has been clicked
if (isset($_POST["btn_reg"])){
    //start by receiving data
    $name = $_POST["u_name"];
    $email = $_POST ["u_email"];
    $pass = $_POST ["u_password"];
    // now proceed to connect to the database to save your data

 require_once "db_connection.php";

 // create the insert query to save the data
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`)
            VALUES (Null,'$name','$email','$pass')";
    // finally save the data with mysqli_query
    $save = mysqli_query($connection,$insertQuery);
    // check if connection is
    if (isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }

}