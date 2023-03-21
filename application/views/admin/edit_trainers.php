<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thunder gym admin panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="row">
            <div class="col-md-12">
            <h3 class="text-primary">Edit trainers details</h3>
            <?php
            foreach($data as $d)
            {
            ?>
              
              
              
            <form action="<?=base_url('admin/updateTrainer/'.$d->id)?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">workout name:</label>
                <input type="text" class="form-control" value="<?=$d->name?>" placeholder="Enter Trainer name" name="name" autofocus id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Choose workout:</label>
                <input type="text" class="form-control" value="<?=$d->workout?>" placeholder="Enter Workout name" name="workout" id="name" required>
            </div>
            
            <input type="submit" value="update" class="btn btn-primary" name="edittrainer">
            </form>
            </div>
       </div>
   <?php
            }
?>            
</div>
</body>
</html>
