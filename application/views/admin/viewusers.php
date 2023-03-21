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
<table class="table  table-bordered mt-4">
    <thead class="thead-dark">
    <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>Registered time</th>
    </tr>
    </thead>
    <?php
    $i=1;
    foreach($alluser as $au)
    {
        ?>
        <tr class="table-secondary">
            <td><?php echo $i; ?></td>
            <td><?php echo $au->name; ?></td>
            <td><?php echo $au->email; ?></td>
            <td><?php echo $au->password; ?></td>
            <td><?php echo $au->registered_time; ?></td>
        </tr>
        <?php
        $i++;
    }

    ?>
</table>
</div>
</body>
</html>
