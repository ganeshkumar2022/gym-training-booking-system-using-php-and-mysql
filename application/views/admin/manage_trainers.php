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
        <th>Workout</th>
        <th>Myimage</th>
        <th>date and time</th>
        <th>Manage</th>
    </tr>
    </thead>
    <?php
    $i=1;
    foreach($trainers as $au)
    {
        ?>
        <tr class="table-secondary">
            <td><?php echo $i; ?></td>
            <td><?php echo $au->name; ?></td>
            <td><?php echo $au->workout; ?></td>
            <td><img src='<?=base_url()."uploads/".$au->myimage; ?>' height="130"></td>
            <td><?php echo $au->reading_time; ?></td>
            <td><a href="<?=base_url('admin/edittrainers/'.$au->id)?>" class="btn btn-success">Edit</a>
            <a href="<?=base_url('admin/delete_trainers/'.$au->id)?>" class="btn btn-danger ml-2">Delete</a></td>
        </tr>
        <?php
        $i++;
    }

    ?>
</table>
</div>
</body>
</html>
