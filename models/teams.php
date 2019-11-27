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

function getTeam ($id)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT 
    teams.*, coachs.name AS coach_name, coachs.photo 
    FROM teams 
    INNER JOIN coachs_has_teams ON teams.id = coachs_has_teams.id_team 
    INNER JOIN coachs ON coachs_has_teams.id_coach = coachs.id
    WHERE teams.id = :id');
  $stmt->bindValue(':id', $id);
  
  $stmt->execute();

  return $stmt->fetch();
}


 
function getPlayers ($id) {
    $db = dbConnect();
    $stmt = $db->prepare('SELECT 
      players.*, players_has_teams.number
      FROM players 
      INNER JOIN players_has_teams ON players.id = players_has_teams.id_player
      WHERE players_has_teams.id_team = :id 
      AND players_has_teams.number != 0 
      ORDER BY players_has_teams.number');
      //prend tous les joueurs sauf 0 et les ordonnent par numéro
    $stmt->bindValue(':id', $id);
    
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  $req = 'SELECT 
  matchs.*, players_has_teams.number
  FROM matchs 
  INNER JOIN teams AS th ON matchs.id_team_home = th.id
  INNER JOIN teams AS ta ON matchs.id_team_away = ta.id
  WHERE th.id = :id_team OR ta.id = :id_team)'
  
  function getMatchs ($id) {
    $db = dbConnect();
    $stmt = $db->prepare('
      
      
    $stmt->bindValue(':id', $id);
    
    $stmt->execute();
    return $stmt->fetchAll();
  }
  








?>
