<?php

include 'connect.php';

// jQuery has a AJAX shortcut for variables
extract($_POST);

if(isset($_POST['nameSend']) 
&& isset($_POST['emailSend'])
&& isset($_POST['mobileSend'])
&& isset($_POST['majorSend'])){
    
    // query
    $sql = "INSERT INTO `students` (email, full_name, mobile, major) ";
    $sql .= "VALUES ('$emailSend', '$nameSend', '$mobileSend', '$majorSend')";

    $result = mysqli_query($con, $sql);
}
?>