<?php
if(!$this->session->has_userdata('id'))
{
redirect('login');
}

?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark p-4">
  <h3 class="navbar-brand log" style="font-size:35px;color:rgb(251,91,33);">THUNDER GYM</h3>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

 
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav na ">
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="<?=base_url('users/editinfo')?>" style="font-family:Franklin Gothic Medium;">Edit Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="<?=base_url('users/timing')?>" style="font-family:Franklin Gothic Medium;">Time Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="<?=base_url('users/chooseTraining')?>" style="font-family:Franklin Gothic Medium;">Choose Training</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="<?=base_url('users/trainers')?>" style="font-family:Franklin Gothic Medium;">View Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="<?=base_url('users/viewusers')?>" style="font-family:Franklin Gothic Medium;">check status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="<?=base_url('users/logout')?>" style="font-family:Franklin Gothic Medium;">Logout</a>
      </li>
    </ul>
    
   
  </div>
</nav>