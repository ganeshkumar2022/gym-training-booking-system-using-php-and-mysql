<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thunder gym User dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    a:hover
    {
        text-decoration:none;
    }
</style>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <div class="container">
        <div class="row mt-4">
        
                <?php
foreach($data as $d)
{
    ?>
   <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url()."uploads/$d->myimage"; ?>" height="200" alt="Card image">
                <div class="card-body" style="background-color:lightgrey;height:200px;">Name :<?=$d->name?><br/>Workout :<?=$d->description?></div>
                <div class="card-footer bg-primary text-center" ><a href="<?=base_url('users/chooseTraining/')?>?id=<?=$d->name?>&&wid=<?=$d->id?>" class="text-white">Join <?=$d->name?></a></div>
            </div>
        </div>
    <?php
}

?>
            
       </div>
</div>
</body>
</html>