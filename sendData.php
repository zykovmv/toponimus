<?php
/*  echo "I get param1 = ".$_POST['q1']." and param2 = ".$_POST['q2']; */
require_once 'connect.php';
global $conn;
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
        $user_query = "INSERT INTO user (user_id,usercity,age,education,answer) VALUES (NULL,'$q1','123','$q2','123')";
        $res = $conn->query($user_query);
        if (!$res) echo "Сбой при вставке данных: $user_query<br>".
        $conn->error . "<br><br>";
if($q1 && $q2)
{
        echo ($q1);
        echo ($q2);
}
?>