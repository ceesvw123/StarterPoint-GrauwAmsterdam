<?php
function getAll($db, $table){
  $query = "SELECT * FROM ".$table;
  $result = $db->query($query);
  while ($assoc = $result->fetch_assoc()) {
    $resultarray[] = $assoc;
  }
  return $resultarray;
}
