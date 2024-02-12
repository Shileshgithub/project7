
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <title>STUDENT DETAILS</title>
        </head>
    <body>

                 <div class="container" style="panding-toop:10px">
                 <h3>Student details</h3>
                 <hr>
                 
                    <form method="post" name="StudentDetails"action="<?php echo base_url().'index.php/user/create'?>" >
                    <div class = "row mt-5" >
                       <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"value="<?php echo set_value('name');?> "class="form-control">
          
                        <?=form_error('name')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Email</label>
                        <div class="form-group">
                        <input type="text" name="email" value="<?php echo set_value('email');?>"class="form-control">
                        <?=form_error('email')?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Gender</label>
                        <div class="form-group">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Hobby</label>
                        <div class="form-group">
                        <input type="checkbox" name="hobby" value="cricket">cricket
                        <input type="checkbox" name="hobby" value=" hockey">Hockey
                        </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>City</label>
                        <div class="form-group">
                        <input type="radio" name="city" value="jabalpur">Jabalpur
                        <input type="radio" name="city" value="indore">Indore
                        </div>
                        <div class="col-md-6 col-lg-6 mb-3">
                        
                    </div>
                        <div class="form-group">
                        <button class="btn btn-primary">create</button>
                        <a href="<?php echo base_url().'index.php/user/index';?>"class="btn-secondary btn">Cancle</a>
                        </div>
                   </div>
      </div>
  </body>
</html>