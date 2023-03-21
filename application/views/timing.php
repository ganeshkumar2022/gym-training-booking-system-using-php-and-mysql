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
<?php
foreach($data as $d)
{
    ?>

<h3 class="text-primary"><?=$d->name?></h3>
<table class="table table-bordered">
<tr class="bg-success text-light">

<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
<th>Saturday</th>
</tr>
<tr>
<td><?=$d->monday?></td>
<td><?=$d->tuesday?></td>
<td><?=$d->wednesday?></td>
<td><?=$d->thursday?></td>
<td><?=$d->friday?></td>
<td><?=$d->saturday?></td>
</tr>
</table>
<?php
}
?>
</div>
</body>
</html>
