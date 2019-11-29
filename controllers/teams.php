<?php

require('models/teams.php');

function showTeams () {
    $teams = getTeams();

    require('views/teams.php');
}


function showTeam($id) {

    
    $team = getTeam($id);
    $players = getPlayers($id);
    $matchs_played = getMatchsPlayed($id);
    $matchs_not_played = getMatchsNotPlayed($id);

    require('views/team.php');

}



?>