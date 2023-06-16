<?php

include 'connect.php';

if(isset($_POST['updateId'])){
    $userId = $_POST['updateId'];
    $sql = "SELECT * FROM `students` WHERE ID = $userId";
    $result = mysqli_query($con, $sql);
    $response = array(); // make an array 
    while($row = mysqli_fetch_assoc($result)){
        $response = $row; // pass it as an array
    }
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid or data not found";
}
?>