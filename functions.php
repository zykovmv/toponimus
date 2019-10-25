<?php
  require_once 'connect.php';
  function getRandomCity ($num){
    global $conn;
        $queryCountRow = "SELECT count(*) FROM objects WHERE object_type RLIKE $num";
        $countRow = $conn->query($queryCountRow);
        $d = mysqli_fetch_row($countRow);
        $rand = mt_rand(0,$d[0]-1);
        $queryRndValue = "SELECT objects FROM objects WHERE object_type RLIKE $num LIMIT $rand, 1";
        $result = $conn->query($queryRndValue);
        $result->data_seek(1);
        $cityRow = mysqli_fetch_array($result, MYSQLI_BOTH);//$result-> fetch_arrow(MYSQLI_NUM);
        echo $cityRow[0];
   }

  function getRandomPhrase(){
      global $conn;
      $queryCountRow = "SELECT count(*) FROM phrases";
      $countRow = $conn->query($queryCountRow);
      $d = mysqli_fetch_row($countRow);
      $rand = mt_rand(0,$d[0]-1);
      $queryRndValue = "SELECT phrase FROM phrases LIMIT $rand, 1";
      $result = $conn->query($queryRndValue);
      $result->data_seek(1);
      $phraseRow = mysqli_fetch_array($result, MYSQLI_BOTH);//$result-> fetch_arrow(MYSQLI_NUM);
      echo $phraseRow[0];
  }

  function getRandomAdj(){
    global $conn;
    $queryCountRow = "SELECT count(*) FROM adjectives";
    $countRow = $conn->query($queryCountRow);
    $d = mysqli_fetch_row($countRow);
    $rand = mt_rand(0,$d[0]-1);
    $queryRndValue = "SELECT adjective FROM adjectives LIMIT $rand, 1";
    $result = $conn->query($queryRndValue);
    $result->data_seek(1);
    $phraseRow = mysqli_fetch_array($result, MYSQLI_BOTH);//$result-> fetch_arrow(MYSQLI_NUM);
    echo $phraseRow[0];
}

function getRandomVerb(){
  global $conn;
  $queryCountRow = "SELECT count(*) FROM verbs";
  $countRow = $conn->query($queryCountRow);
  $d = mysqli_fetch_row($countRow);
  $rand = mt_rand(0,$d[0]-1);
  $queryRndValue = "SELECT verb FROM verbs LIMIT $rand, 1";
  $result = $conn->query($queryRndValue);
  $result->data_seek(1);
  $phraseRow = mysqli_fetch_array($result, MYSQLI_BOTH);//$result-> fetch_arrow(MYSQLI_NUM);
  echo $phraseRow[0];
}
  
  function countUser(){
    global $conn;
    $queryCountRow = "SELECT COUNT(*) FROM test_data";
    $num_rows = $conn->query($queryCountRow);
    $d = $num_rows -> fetch_row();
    $total = $d[0];
    echo $total;    
  }
?>






