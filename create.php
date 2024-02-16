
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
                <a href="#" class="navbar-brand">CRUD STUDENT APPLICATION</a>
            </div>
        </div>

                 <div class="container" style="panding-toop:10px">
                 <h3>Student details</h3>
                 <hr>
                 
                    <form method="post" name="StudentDetails"action="<?php echo base_url().'index.php/Crudcontroller/create'?>" >
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
                        <input type="radio" name="gender" value="Male" <?php if(!empty($user['gender']) && $user['gender'] == 'Male'){echo"checked";}?>>Male
                        <input type="radio" name="gender" value="Female"<?php if(!empty($user['gender']) && $user['gender'] == 'Female'){echo"checked";}?>>Female
                        <?=form_error('gender')?>
                        </div>
                        </div>
                    </div>
                    <label>Hobby</label>
                        <label class="checkbox-inline">
                           

                            <input type="checkbox" name="hobby_h[]" value="cricket" />cricket

                            <input type="checkbox" name="hobby_h[]" value="hockey" />hockey
                            <?=form_error('hobby_h[]')?>
                            
                            </label>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>City</label>
                        <div class="form-group">
                        <input type="radio" name="city" value="jabalpur"<?php if(!empty($user['city']) && $user['city'] == 'jabalpur'){echo"checked";}?>>Jabalpur
                        <input type="radio" name="city" value="indore"<?php if(!empty($user['city']) && $user['city'] == 'indore'){echo"checked";}?>>Indore
                        <?=form_error('city')?>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-3">
                        <select id="country" name="country" class="form-select inline">
                            <option value="">Select country</option>
                            <option value="">select</option>
                            <option value="Ajaigarh" <?php if(!empty($user['country']) && $user['country'] == 'Ajaigarh'){echo"checked";}?>>Ajaigarh</option>
                            <option value="MalAkodiae" <?php if(!empty($user['country']) && $user['country'] == 'MalAkodiae'){echo"checked";}?>>MalAkodiae</option>
                            <option value="Alampur" <?php if(!empty($user['country']) && $user['country'] == 'Alampur'){echo"checked";}?>>Alampur</option>
                            <option value="Alirajpur" <?php if(!empty($user['country']) && $user['country'] == 'Alirajpur'){echo"checked";}?>>Alirajpur</option>
                            <?=form_error('country')?>
                         </select>

                    </div>
                        <div class="form-group">
                        <button class="btn btn-primary">create</button>
                        <a href="<?php echo base_url().'index.php/Crudcontroller/index';?>"class="btn-secondary btn">Cancle</a>
                        </div>
                   </div>
</form>
      </div>
  </body>
</html>