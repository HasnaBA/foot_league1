<?php ob_start(); ?>

<style>

#card{
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

<div class="container">


    <h1>Liste des équipes</h1>



    <div class="row">
        <?php foreach ($teams as $team) { ?>
            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $team['logo']; ?> " alt="team_logo">
                    <div id="card" class="card-body">
                        <div class="text-center">
                            <h5 class="card-title"><?php echo $team['name'];?></h5>
                            <a href="./team/<?php echo $team['id']; ?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>