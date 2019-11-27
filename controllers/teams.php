<?php

require('models/teams.php');

function showTeams () {
    $teams = getTeams();

    require('views/teams.php');
}


function showTeam($id) {

    
    $team = getTeam($id);
    $players = getPlayers($id);
    $date = new DateTime($players['birthday_date']);
    require('views/team.php');

}
function DateTime(){


}

?>