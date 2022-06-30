<?php
// Check  if the update button is clicked
if (isset($_POST["btn_update"])){
    // Receive the updated data from the form
    $userId = $_POST["u_id"];
   $updatedName = $_POST["u_name"];
    $updatedEmail = $_POST["u_email"];
    $updatedPassword = $_POST["u_pass"];
    // Connect to thr data base to return data
    require_once "db_connection.php";
    //Create Update Query
    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$updatedEmail',
`siri`='$updatedPassword'
 WHERE id='$userId'";
    //Finally execute the update the update query by use of mysqli_query()
    $update = mysqli_query($connection,$updateQuery);
    //Check if update was successful
    if (isset($update)){
        //Redirect the user to users.php to see changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }

}