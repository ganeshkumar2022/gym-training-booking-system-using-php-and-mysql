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
                <table class="table table-bordered mt-4">
                    <tr class="bg-primary text-light"><th>S.no</th><th>Choose Workout</th><th>Status</th><th>Applied time</th></tr>
                   <?php
                   $i=1;
foreach($data as $d)
{
    ?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?=$d->workout?></td>
    <td><span class="badge badge-pill badge-dark"><?=$d->status?></span></td>
    <td><?=$d->joining_time?></td>
</tr>
    <?php
$i++;
}
                    ?>
                    
                </table>
            
            </div>
       </div>
</div>
</body>
</html>