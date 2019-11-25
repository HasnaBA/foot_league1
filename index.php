<?php

// Dans ce fichier que des controllers

//if 'route' exists then get route else teams
$route = isset($_GET['route']) ? $_GET['route'] : 'teams';


if ($route === 'teams') {
    // load teams ctrl
    require('controllers/teams.php');
    showTeams();
}





?>