<?php
require_once('utils/db.php');


function getTeams ()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM teams');
  // $params = array();
  
  $stmt->execute();

  return $stmt->fetchAll();
  


}
?>