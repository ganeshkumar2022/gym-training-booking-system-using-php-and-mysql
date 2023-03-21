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
        <div class="row">
            <div class="col-md-12">
               
                   <?php
foreach($data as $d)
{
    ?>
<h3 class="text-primary">Edit Userinfo</h3>
<form action="" method="post" autocomplete="off">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" value="<?=$d->name?>" placeholder="Enter name" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" value="<?=$d->password?>" placeholder="Enter password" name="password" id="pwd">
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Update">
</form>
    <?php
}
                    ?>
            </div>
       </div>
</div>
</body>
</html>