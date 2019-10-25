<?php
error_reporting(-1);
require_once 'login_toponimus.php';
$conn = new mysqli($hm, $un, $pw, $db);
$conn->set_charset("utf8");
//if ($conn->connect_error) die($conn->connect_error);
/* if (!($conn->connect_error)){
    echo "Connect to database success";
}
else{
    echo "Connection failed! Something wrong";
} */
?>