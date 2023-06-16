<?php

include "connect.php";

if(isset($_POST['deleteSend'])){
    $uniqueId = $_POST['deleteSend'];

    $sql = "DELETE FROM `students` WHERE ID = $uniqueId";
    $result = mysqli_query($con, $sql);
}

?>