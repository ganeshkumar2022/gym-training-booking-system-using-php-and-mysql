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
        <th>Workout</th>
        <th>Status</th>
        <th>date and time</th>
        <th>Update Status</th>
        <th>Confirm</th>
    </tr>
    </thead>
    <?php
    $i=1;
    foreach($data as $au)
    {
        ?>
        <form action="" method="post">
        <tr class="table-secondary">
            <td><?php echo $i; ?></td>
            <td><?php echo $au->workout; ?></td>
            <td><span class="badge badge-pill badge-danger"><?php echo $au->status; ?></a></td>
            <td><?php echo $au->joining_time; ?></td>
            <td>
            <input type="hidden" name="id" value="<?=$au->id?>">
            <select name="status">
                <option value="bending">bending</option>
                <option value="joined">joined</option>
            </select></td><td>
            <input type="submit" value="update" name="update" class="btn btn-sm btn-warning">
            </td>
        </tr>
        </form>
        <?php
        $i++;
    }

    ?>
</table>
</div>
</body>
</html>
