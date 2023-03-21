<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thunder gym login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
body
{
    background-image:url('<?=base_url()?>assets/images/gym6.jpg');
    background-repeat:no-repeat;
    background-size:100% 100vh;
}
label
{
    font-weight:bold;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4" style="margin-top:100px;">
            <form action="" method="post" autocomplete="off">
            <h3 class="text-danger font-weight-bold">Login Form</h3>
            <div class="form-group">
                <label for="email" class="font-weight-bold">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd" class="font-weight-bold">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
            </div>
            <a href="<?=base_url('register')?>">Already signup login here ?</a><br/>
            <input type="submit" value="login" class="btn btn-success" name="lsubmit">
            </form>
            <!--<a href="<?=base_url('login/goolge_login')?>">
                <img src="<?=base_url('assets/images/google_logo.png')?>" width="250" height="80">
            </a>-->
            </div>
       </div>
</div>
</body>
</html>