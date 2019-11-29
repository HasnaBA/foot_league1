<?php
$data = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($data);


// Dans ce fichier que des controllers

//if 'route' exists then get route else teams
$route = $data[0] ? $data[0] : 'teams';


if ($route === 'teams') {
    // load teams ctrl
    require('controllers/teams.php');
    showTeams();

} else if ($route === 'team') {
    require('controllers/teams.php');
    $idTeam = $data[1];
    showTeam($idTeam);

}







?>