<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thunder gym Register page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
body
{
    background-image:url('<?=base_url()?>assets/images/gym5.jpg');
    background-repeat:no-repeat;
    background-size:cover;
}
label
{
    color:white;
    font-weight:bold;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
            <h3 class="text-light">Registration Form</h3>
            <form action="" method="post" autocomplete="off">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" autofocus id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
            </div>
            <div class="form-group">
                <label for="cpwd">Confirm Password:</label>
                <input type="password" class="form-control" placeholder="Enter Confirm password" name="cpassword" id="cpwd" required>
            </div>
            <a href="<?=base_url('login')?>">Already signup login here ?</a><br/>
            <input type="submit" value="register" class="btn btn-primary" name="rsubmit">
            </form>
            </div>
       </div>
</div>
</body>
</html>