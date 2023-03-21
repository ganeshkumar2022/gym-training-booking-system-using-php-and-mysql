<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym management system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
    <style>
      html
    {
    scroll-behavior:smooth;
    }
    .ft
    {
        background-image:url("<?php echo base_url();?>assets/images/fitness.png");
        height:600px;
        background-repeat:no-repeat;
        background-size:100% 100%;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark p-4">
  <h3 class="navbar-brand log" style="font-size:35px;color:rgb(251,91,33);">THUNDER GYM</h3>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

 
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav na">
      <li class="nav-item">
        <a class="nav-link text-white" href="#home" style="font-family:Franklin Gothic Medium;">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#about" style="font-family:Franklin Gothic Medium;">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#" style="font-family:Franklin Gothic Medium;">CLASSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#" style="font-family:Franklin Gothic Medium;">TRAINERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#opening_hours" style="font-family:Franklin Gothic Medium;">OPENING HOURS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#contact" style="font-family:Franklin Gothic Medium;">CONTACT</a>
      </li>
    </ul>
    <ul class="navbar-nav na ml-auto">
      <li class="nav-item">
      <a href="<?=base_url('login')?>" style="font-family:Franklin Gothic Medium;font-weight:normal;background:rgb(251,91,33);padding:20px;" class="btn btn-lg text-white">JOIN US</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel" id="hom">

<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>/assets/images/gym1.jpg" style="width:100vw;height:80vh;" alt="Los Angeles">
      <div class="carousel-caption d-none d-md-block" style="font-family:fantasy;">
    <h5 style="font-size:5vh;">Best Gym Center</h5>
    <h1 style="font-size:11vh;">BUILD YOUR BODY STRONG WITH<br>OUR TRAINERS</h1>
    <div>
    <a href="<?=base_url('login')?>" style="font-family:Franklin Gothic Medium;font-weight:normal;background:rgb(251,91,33);padding:10px;" class="btn btn-lg text-white">JOIN US</a>
    <a href="#contact" style="font-family:Franklin Gothic Medium;font-weight:normal;background:white;padding:10px;" class="ml-2 btn btn-lg">CONTACT US</a>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/assets/images/gym2.jpg" style="width:100vw;height:80vh;" alt="Chicago">
      <div class="carousel-caption" style="font-family:fantasy;">
      <h5 style="font-size:5vh;">Best Gym Center</h5>
    <h1 style="font-size:11vh;">GROW YOUR STRENGTH WITH<br>OUR TRAINERS</h1>
    <div>
    <a href="<?=base_url('login')?>" style="font-family:Franklin Gothic Medium;font-weight:normal;background:rgb(251,91,33);padding:10px;" class="btn btn-lg text-white">JOIN US</a>
    <a href="#contact" style="font-family:Franklin Gothic Medium;font-weight:normal;background:white;padding:10px;" class="ml-2 btn btn-lg">CONTACT US</a>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/assets/images/gym3.jpg" style="width:100vw;height:80vh;" alt="New York">
      <div class="carousel-caption" style="font-family:fantasy;">
      <h5 style="font-size:5vh;">Best Gym Center</h5>
    <h1 style="font-size:11vh;">BUILD MUSCLE STRONG WITH<br>OUR TRAINERS</h1>
    <div>
    <a href="<?=base_url('login')?>" style="font-family:Franklin Gothic Medium;font-weight:normal;background:rgb(251,91,33);padding:10px;" class="btn btn-lg text-white">JOIN US</a>
    <a href="#contact" style="font-family:Franklin Gothic Medium;font-weight:normal;background:white;padding:10px;" class="ml-2 btn btn-lg">CONTACT US</a>
    </div>
  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="container my-4">
  <div class="row" id="about" >
    <div class="col-md-4" data-aos="fade-right" style="margin-top:30px;" data-aos-delay="500">
      <img src="<?php echo base_url(); ?>/assets/images/gym4.jfif" style="width:100%;height:100%;">
    </div>
    <div class="col-md-8" data-aos="fade-left" style="margin-top:30px;" data-aos-delay="500">
      <h4 style="font-family:Franklin Gothic Medium;color:rgb(251,91,33);">About Us</h4>
      <h1 style="font-size:9vh;font-family:fantasy;">Welcome to Thunder gym</h1>
      <h5 class="text-secondary" style="font-family:Franklin Gothic Medium;font-size:3vh">
      Our specialists are very prepared and fit the bill to furnish you with shape-centered alterations that will push you as far as possible without bargaining your security.
      </h5>
      <p style="">We are provide a good coaching with professionals. You grow your muscle,weight loss and strengthen
        your body it is possible with a small cost and daily workouts. Our trainers have 7 years experience
        they provide a good coaching. they are user friendly. In 2007, thunder gym was starts it was growth in
        every year. our trainers are achieve at lot of state level, national level competitions.
        
      </p>
      <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ipsam impedit soluta sed enim. Nobis iure cumque corporis mollitia expedita perferendis labore fuga soluta? Aut libero reprehenderit exercitationem tempore cum, error odio veritatis laboriosam pariatur expedita atque iure sint sapiente quia. Modi sunt, fugiat laborum aliquam, neque cupiditate esse culpa, possimus tempore placeat sequi commodi nobis ex illo? Voluptate omnis animi libero facere, mollitia in blanditiis, consequuntur, provident cupiditate non assumenda. Modi quam repellendus, doloremque quas consectetur, distinctio aliquam odit, dolore facilis error perspiciatis maxime eos tempore dignissimos tempora consequatur odio ut amet itaque officia dolor? Impedit suscipit aut animi?
      </p>
     
    </div>
  </div>
</div>

<!--opening hours -->

<div class="container my-4 ft">
  <div class="row" id="opening_hours" >
    <div class="col-md-4" data-aos="fade-right" style="margin-top:30px;" data-aos-delay="100">
    <h4 style="font-family:Franklin Gothic Medium;color:rgb(251,91,33);">Opening Hours</h4>
    <h1 style="font-size:9vh;font-family:fantasy;">Gym timings</h1>
    <p>Each day gives a good oppurtunity to get stronger and living healthier.
      now is the time to upgrade your body muscle and strength with us.
    </p>
    <ul class="list-group">
  <li class="list-group-item bg-secondary text-light">Monday - Friday</li>
  <li class="list-group-item">6.30 am - 9.00 am</li>
</ul><br/>
<ul class="list-group">
  <li class="list-group-item bg-secondary text-light">Saturday - Sunday</li>
  <li class="list-group-item">7.00 am - 9.00 am</li>
</ul>
  </div>
  </div>

</div>




<div class="container my-4" id="contact">
  <div class="row">
  <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
  <h4 style="font-family:Franklin Gothic Medium;color:rgb(251,91,33);">Thunder gym</h4>
    <h1 style="font-size:9vh;font-family:fantasy;">Contact Information</h1>
    <ul class="list-unstyled text-secondary">
      <li><i class="fa-solid fa-location-dot"></i>  24 south street, kodambakam, chennai.</li>
      <li><i class="fa-solid fa-phone"></i>  +91 78912 76534.</li>
      <li><i class="fa-solid fa-envelope"></i>  testinggym@gmail.com</li>
  </ul>
  <form action="" method="post" autocomplete="off">
  <div class="form-group">
    <input type="text" class="form-control" style="border:none;border-bottom:2px solid black;background-color:lightgrey;" placeholder="Enter Name" name="name" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" style="border:none;border-bottom:2px solid black;background-color:lightgrey;" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" style="border:none;border-bottom:2px solid black;background-color:lightgrey;" placeholder="Enter phone" name="mobile" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" style="border:none;border-bottom:2px solid black;background-color:lightgrey;" placeholder="Enter text" name="message" rows="5" required></textarea>
  </div>
  <input type="submit" style="font-family:Franklin Gothic Medium;font-weight:normal;background:rgb(251,91,33);padding:10px;" class="btn text-white" name="submit" value="SUBMIT">
    
</form>
  </div>
  <div class="col-md-6" data-aos="fade-left" data-aos-delay="500">
      <img src="<?php echo base_url(); ?>/assets/images/fit2.png" style="width:100%;height:100%;">
    </div>
  </div>
</div>

<script>
AOS.init();
</script>
</body>
</html>