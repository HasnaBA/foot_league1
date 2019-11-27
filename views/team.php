<?php ob_start(); ?>

<link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova|Lato|Roboto&display=swap" rel="stylesheet">

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
        <div class="container">
            <div class="col-md-12 ">
                <div class="card" style="width: 60rem;">
                    <img class="card-img-top" style="width: 18rem" src="<?php echo $team['logo']; ?> " alt="team_logo">
                    <div id="card" class="card-body">
                        <div class="text-left">
                            <h2 class="card-title text-center"><?php echo $team['short_name']; ?></h2>
                        </div>
                    </div>


                    <ul id="description" class="list-group ">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">Nom :<strong><?php echo $team['name']; ?></strong></li>
                        <li class="list-group-item">Fondé en : <strong><?php echo  $team['fundation_date']; ?></strong></li>
                        <li class="list-group-item">Président :<strong> <?php echo  $team['president']; ?></strong></li>
                        <li class="list-group-item">Entraîneur :<strong> <?php echo  $team['coach_name']; ?></strong></li>
                        <img class="card-img-top" style="width: 18rem" src="<?php echo $team['photo']; ?> " alt="team_logo">

                        <!--************************section Palmares*****************************--->

                        <div id="accordion">
                            <div class="card text-align-center">
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>EFFECTIF <?php echo $team['short_name']; ?></strong>
                                        </button>
                                        </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Numéro</th>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Né le</th>
                                                    <th scope="col">Pays</th>

                                                </tr>
                                            </thead>
                                            
                                            <div class="card">
  
                                            <tbody>


                                                <?php foreach ($players as $player) { ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $player['number']; ?></th>
                                                        <td><?php echo $player['name']; ?> </td>
                                                        <td><?php echo (new DateTime($player['birthday_date']))->format('d/m/Y'); ?></td>
                                                        <td><?php echo $player['nationality']; ?></td>


                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <strong>CALENDRIER <?php echo $team['short_name']; ?></strong>
                                        </button>
                                    </h5>
                                    <tbody>


                                        <?php foreach ($teams as $team) { ?>
                                            <tr>
                                                <td><?php echo (new DateTime($['birthday_date']))->format('d/m/Y'); ?></td>
                                                <th scope="row"><?php echo $player['number']; ?></th>
                                                <td><?php echo $player['name']; ?> </td>
                                                <td><?php echo (new DateTime($player['birthday_date']))->format('d/m/Y'); ?></td>
                                                <td><?php echo $player['nationality']; ?></td>


                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>

                </div>

            </div>



            <!--************************section Palmares*****************************--->


        </div>


    </div>






</div>








































<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>