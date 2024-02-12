
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
           
            <title>Update Student</title>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
        </head>
        <body>
        <div class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">CRUD APPLICATION</a>
            </div>
        </div>
        <div class="container" style="padding-top: 10px;">
                 <h3>Update User</h3>
                 <hr>
                 <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>" >
                 <div class="row">

                    <div class = "col-md-6" >
                       <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name' ,$user['name']);?> "class="form-control">
          
                        <?php echo form_error('name')?>
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo set_value('email' ,$user['email']);?>"class="form-control">
                        <?php echo form_error('email')?>
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
                         <div class="form-group">
                          <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancle</a>
                     </div>
                   </div>
                </div>
                </form>
           </div>
        </body>
</html>