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
        <div class="row">
            <div class="col-md-12">
            <h3 class="text-primary">Add training</h3>
            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">workout name:</label>
                <input type="text" class="form-control" placeholder="Enter workout name" name="name" autofocus id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Description</label>
                <textarea placeholder="enter the description here..." name="description" class="form-control" rows="5" required></textarea>    
            </div>
            <label for="email">Choose the image</label>
            <div class="custom-file">
                
                <input type="file" class="custom-file-input" name="myimage" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <script>
            
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>
            <div class="form-group">
            <label for="sel1">Select Monday time:</label>
            <select class="form-control" id="sel1" name="monday" required>
                <option value="">----SELECT TIME----</option>
                <option value="6-8">6-8</option>
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sel1">Select Tuesday time:</label>
            <select class="form-control" id="sel1" name="tuesday" required>
                <option value="">----SELECT TIME----</option>
               <option value="6-8">6-8</option>
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sel1">Select Wednesday time:</label>
            <select class="form-control" id="sel1" name="wednesday" required>
                <option value="">----SELECT TIME----</option>
               <option value="6-8">6-8</option>
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sel1">Select Thursday time:</label>
            <select class="form-control" id="sel1" name="thursday" required>
                <option value="">----SELECT TIME----</option>
                <option value="6-8">6-8</option>
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sel1">Select Friday time:</label>
            <select class="form-control" id="sel1" name="friday" required>
                <option value="">----SELECT TIME----</option>
               <option value="6-8">6-8</option>
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sel1">Select Saturday time:</label>
            <select class="form-control" id="sel1" name="saturday" required>
                <option value="">----SELECT TIME----</option>
               <option value="6-8">6-8</option>
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
            </select>
            </div>


            
            <input type="submit" value="register" class="btn btn-primary" name="addworkout">
            </form>
            </div>
       </div>
</div>
</body>
</html>
