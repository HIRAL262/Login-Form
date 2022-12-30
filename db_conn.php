<?php
$name = "localhost";
$uname = "root";
$password = "";
$db_name = "login_form";

$conn = mysqli_connect( $name, $uname, $password, $db_name);

if( !$conn ){
    echo "Connection Failed";
}
// echo "succesfully connected";