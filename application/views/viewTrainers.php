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
                <div class="card-footer" style="background-color:lightgrey;">Name :<?=$d->name?><br/>Workout :<?=$d->workout?></div>
            </div>
        </div>
    <?php
}

?>
            
       </div>
</div>
</body>
</html>