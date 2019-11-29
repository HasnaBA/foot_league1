<?php ob_start(); ?>

<style>
    h1 {
        font-family: 'Ibarra Real Nova', serif;
        font-size: 5rem;
        text-align: center;
        margin-top: 50px;

    }


    #description {
        font-family: 'Lato', sans-serif;
    }

    h3 {}
</style>


<div class="container text-align center">


    <h1>Description de l'équipe</h1>

    <div class="row">
        <div class="col-md-12 ">



            <ul id="description" class="list-group ">
                <li class="list-group-item"></li>
                <li class="list-group-item">Nom :<strong><?php echo $team['name']; ?></strong></li>
                <li class="list-group-item">Fondé en : <strong><?php echo  $team['fundation_date']; ?></strong></li>
                <li class="list-group-item">Président :<strong> <?php echo  $team['president']; ?></strong></li>
                <li class="list-group-item">Entraîneur :<strong> <?php echo  $team['coach_name']; ?></strong></li>
            </ul>
            <img class="card-img-top" style="width: 18rem" src="<?php echo $team['photo']; ?> " alt="team_logo">

        </div>
    </div>

    <!--************************section Palmares*****************************--->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h3 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong> EFFECTIF <?php echo  $team['short_name']; ?></strong>
                    </button>
                </h3>
            </div>

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Numéro</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Né le</th>
                            <th scope="col">Poste</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($players as $player) { ?>
                            <tr>
                                <th scope="row"><?php echo  $player['number']; ?></th>
                                <th scope="row"><?php echo  $player['name']; ?></th>
                                <th scope="row"><?php echo  $player['nationality']; ?></th>
                                <th scope="row"><?php echo  $player['birthday_date']; ?></th>
                                <th scope="row"><?php echo  $player['poste']; ?></th>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        CALENDRIER
                    </button>
                </h3>
            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                <table class="table table-dark">
                    <thead>
                        <h4>Résultats 2019-2020</h4>
                        <tr>
                            <th scope="col">date</th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($matchs_played as $match_played) { ?>
                            <tr>
                                <th scope="row"><?php echo  $match_played['date']; ?></th>
                                <th scope="row"><?php echo  $match_played['th_name']; ?></th>
                                <th scope="row"><?php echo  $match_played['score_home']; ?></th>
                                <th scope="row"><?php echo  $match_played['score_away']; ?></th>
                                <th scope="row"><?php echo  $match_played['ta_name']; ?></th>


                            </tr>



                        <?php } ?>
                    </tbody>
                </table>

                <table class="table table-dark">
                    <thead>
                        <h4>Rencontres à venir</h4>

                    <tbody>

                        <?php foreach ($matchs_not_played as $match_not_played) { ?>
                            <tr>
                                <th scope="row"><?php echo  $match_not_played['date']; ?></th>
                                <th scope="row"><?php echo  $match_not_played['ta_name']; ?></th>
                                <th scope="row"><?php echo  $match_not_played['score_home']; ?></th>
                                <th scope="row"><?php echo  $match_not_played['score_away']; ?></th>
                                <th scope="row"><?php echo  $match_not_played['ta_name']; ?></th>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>



            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ADMINISTRATIF
                    </button>
                </h3>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <table class="table">

                    <tbody>

                        <tr>
                            <td>site: <a href="?route=team&id=<?php echo $team['link']; ?>"> </a><?php echo $team['link']; ?> </td>
                        </tr>
                        <tr>
                            <td>siège: <br> <strong><?php echo $team['adress']; ?></strong></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        STADE
                    </button>
                </h3>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <table class="table">

                    <tbody>

                        <tr>
                            <td>site: <a href="?route=team&id=<?php echo $team['link']; ?>"> </a><?php echo $team['link']; ?> </td>
                        </tr>
                        <tr>
                            <td>siège: <br> <strong><?php echo $team['adress']; ?></strong></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>









</div>





<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>