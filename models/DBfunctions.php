<?php
function getAll($db, $table){
  $query = "SELECT * FROM ".$table;
  $result = $db->query($query);
  while ($assoc = $result->fetch_assoc()) {
    $resultarray[] = $assoc;
  }
  return $resultarray;
}

function GetOne($db,$table,$id){
  $query = "SELECT * FROM ".$table." WHERE id = ".$id;
  $result = $db->query($query);
  var_dump($db);
  while ($assoc = $result->fetch_assoc()) {
    $resultarray[] = $assoc;
  }
  return $resultarray;
}
