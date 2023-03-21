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
            <h3 class="text-primary">Add trainers</h3>
            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Trainer name:</label>
                <input type="text" class="form-control" placeholder="Enter Trainer name" name="name" autofocus id="name" required>
            </div>
            <div class="form-group">
            <label for="sel1">Choose workout:</label>
            <select class="form-control" id="sel1" name="workout" required>
                <option value="">----CHOOSE WORKOUT----</option>
                <?php foreach($data as $d)
                {
                  ?>
                <option value="<?=$d->name?>"><?=$d->name?></option>
                  <?php  
                }
                ?>
            </select>
            </div>
            <label for="email">Choose the image</label>
            <div class="custom-file">
                
                <input type="file" class="custom-file-input" name="myimage" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <script>
            
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>    
            <input type="submit" value="Add" class="btn btn-primary" name="addtrainer">
            </form>
            </div>
       </div>
</div>
</body>
</html>
