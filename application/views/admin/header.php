<?php
if(!$this->session->has_userdata('aid'))
{
redirect('admin');
}
?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link text-light" href="<?=base_url('admin/dashboard')?>">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="<?=base_url('admin/managetrainee')?>">Manage Trainee</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="<?=base_url('admin/viewuser')?>">View Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="<?=base_url('admin/viewenquiry')?>">View Enquiry</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#">Training</a>
    <div class="dropdown-menu bg-primary">
      <a class="dropdown-item text-dark" href="<?=base_url('admin/addworkouts')?>">Add training</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-dark" href="<?=base_url('admin/managetraining')?>">Manage Training</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-dark" href="<?=base_url('admin/addtrainers')?>">Add trainers</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-dark" href="<?=base_url('admin/managetrainers')?>">Manage Trainers</a>
    </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="<?=base_url('admin/logout')?>">Logout</a>
    </li>
  </ul>
</nav>