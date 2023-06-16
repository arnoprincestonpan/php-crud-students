<?php
include 'connect.php';

if (isset($_POST['updateId'])) {
    $userId = $_POST['updateId'];
    $name = $_POST['updateName'];
    $email = $_POST['updateEmail'];
    $mobile = $_POST['updateMobile'];
    $major = $_POST['updateMajor'];

    $sql = "UPDATE `students` SET full_name = '$name', email = '$email', mobile = '$mobile', major = '$major' WHERE ID = $userId";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Update successful";
    } else {
        echo "Update failed";
    }
} else {
    echo "Invalid or missing update ID";
}
?>
