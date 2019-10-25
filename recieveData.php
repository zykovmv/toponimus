<?php
require_once 'connect.php';
error_reporting(0);
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

global $conn;
$user_1 = mysqli_real_escape_string($conn, $_POST['user_1']);
$user_2 = mysqli_real_escape_string($conn, $_POST['user_2']);
$user_age = mysqli_real_escape_string($conn, $_POST['user_age']);
$user_edu = mysqli_real_escape_string($conn, $_POST['user_edu']);

$q11 = mysqli_real_escape_string($conn, $_POST['q11']);
$q12 = mysqli_real_escape_string($conn, $_POST['q12']);
$q21 = mysqli_real_escape_string($conn, $_POST['q21']);
$q22 = mysqli_real_escape_string($conn, $_POST['q22']);
$q31 = mysqli_real_escape_string($conn, $_POST['q31']);
$q32 = mysqli_real_escape_string($conn, $_POST['q32']);
$q41 = mysqli_real_escape_string($conn, $_POST['q41']);
$q42 = mysqli_real_escape_string($conn, $_POST['q42']);
$q51 = mysqli_real_escape_string($conn, $_POST['q51']);
$q52 = mysqli_real_escape_string($conn, $_POST['q52']);
$q61 = mysqli_real_escape_string($conn, $_POST['q61']);
$q62 = mysqli_real_escape_string($conn, $_POST['q62']);

$a11 = mysqli_real_escape_string($conn, $_POST['a11']);
$a12 = mysqli_real_escape_string($conn, $_POST['a12']);
$a21 = mysqli_real_escape_string($conn, $_POST['a21']);
$a22 = mysqli_real_escape_string($conn, $_POST['a22']);
$a31 = mysqli_real_escape_string($conn, $_POST['a31']);
$a32 = mysqli_real_escape_string($conn, $_POST['a32']);
$a41 = mysqli_real_escape_string($conn, $_POST['a41']);
$a42 = mysqli_real_escape_string($conn, $_POST['a42']);
$a51 = mysqli_real_escape_string($conn, $_POST['a51']);
$a52 = mysqli_real_escape_string($conn, $_POST['a52']);
$a61 = mysqli_real_escape_string($conn, $_POST['a61']);
$a62 = mysqli_real_escape_string($conn, $_POST['a62']);

//Структура таблицы:
// user_id / user_city / user_age / user_edu / q11 / a11 / q12 / a12 / q21 / a21 / q22 / a22 / q31 / a31 / q32 / a32 / q41 / a41 / q42 / a42 / q51 / a51 / q52 / a52 / q61 / a61 / q62 / a61
$user_query = "INSERT INTO test_data (user_id,user_1,user_2,user_age,user_education,q11,a11,q12,a12,q21,a21,q22,a22,q31,a31,q32,a32,q41,a41,q42,a42,q51,a51,q52,a52,q61,a61,q62,a62) VALUES (NULL,'$user_1','$user_2','$user_age','$user_edu','$q11','$a11','$q12','$a12','$q21','$a21','$q22','$a22','$q31','$a31','$q32','$a32','$q41','$a41','$q42','$a42','$q51','$a51','$q52','$a52','$q61','$a61','$q62','$a62')";
$res = $conn->query($user_query);
if (!$res) echo "Сбой при вставке данных: $user_query<br>".
$conn->error . "<br><br>";
else echo "Опрос пройден! \nДанные сохранены в базу данных. \nСпасибо за уделенное время!";

$url = 'https://geocode-maps.yandex.ru/1.x/?format=json&results=1&lang=ru_RU&apikey=c910121a-bfc1-479e-a7d1-e5ec2d4f6ece&geocode='.$user_2;
$ar = json_decode(file_get_contents($url),true);
$coords = $ar['response']['GeoObjectCollection']['featureMember']['GeoObject']['Point']['pos'];
list($lon,$lat) = explode(' ',$coords);
$lon = +$lon;
$lat = +$lat;
    $str = file_get_contents('assets/js/data.json');//get contents of your json file and store it in a string
    $arr = json_decode($str, true);//decode it
    $type = "Point"; 
$coordinates = array(
        "type" => $type,
        "coordinates" => array($lat,$lon)
);
    $geometry = array(
        "type" => "Feature",
        "id" => mt_rand(),
        "geometry" => $coordinates
    );
array_push($arr['features'],$geometry);//push contents to ur decoded array i.e $arr
$str = json_encode($arr);
//now send evrything to ur data.json file using folowing code
    if (json_decode($str) != null)
           {
             $file = fopen('assets/js/data.json','w');
             fwrite($file, $str);
             fclose($file);
           }
           else
           {
             //  invalid JSON, handle the error 
           }
?>
                