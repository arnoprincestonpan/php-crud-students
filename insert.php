<?php

include 'connect.php';

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