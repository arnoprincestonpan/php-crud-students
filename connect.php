<?php

// Connection
$con = new mysqli("localhost", 'root', '',
'php_projects');

if(!$con){
    die(mysqli_error($con));
}

?>