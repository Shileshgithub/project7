
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
                 <form method="post" name="createUser" action="<?php echo base_url().'index.php/Crudcontroller/edit/'.$user['id'];?>" >
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
                        <input type="radio" name="gender" value="Male" <?php if(!empty($user['gender']) && $user['gender'] == 'Male'){echo"checked";}?>>Male
                        <input type="radio" name="gender" value="Female"<?php if(!empty($user['gender']) && $user['gender'] == 'Female'){echo"checked";}?>>Female
                        </div>
                    </div>
                    
                    <label>Hobby</label>  
                        <label class="checkbox-inline">
                      <?php   $daa = json_decode($user['hobby_h']);?>

                            <input type="checkbox" name="hobby_h[]" value="cricket" <?php
                                                    if (!empty($user) && in_array("cricket", $daa)){
                                                        echo "checked";
                                                    }
                                                    ?> >cricket

                            <input type="checkbox" name="hobby_h[]" value="hockey" <?php
                                                    if (!empty($user) && in_array("hockey", $daa)){
                                                        echo "checked";
                                                    }
                                                    ?>  />hockey
                            
                            </label>
                       <div class="col-md-6 col-lg-6 mb-3">
                       
                        <div class="form-group">
                        <label>City</label>
                        <input type="radio" name="city" value="jabalpur" <?php if(!empty($user['city']) && $user['city'] == 'jabalpur'){echo"checked";}?> >Jabalpur
                        <input type="radio" name="city" value="indore" <?php if(!empty($user['city']) && $user['city'] == 'indore'){echo"checked";}?> >Indore
                        </div>
                        
                        <div class="col-md-6 col-lg-6 mb-3">  
                        <select id="country" name="country" class="form-select inline">
                             <option value="0">Select</option>
                            <option value="Ajaigarh" <?php if(!empty($user['country']) && $user['country'] == 'Ajaigarh'){echo"selected";}?>>Ajaigarh</option>
                            <option value="Akodia" <?php if(!empty($user['country']) && $user['country'] == 'Akodia'){echo"selected";}?>>Akodia</option>
                            <option value="Alampur" <?php if(!empty($user['country']) && $user['country'] == 'Alampur'){echo"selected";}?>>Alampur</option>
                            <option value="Alirajpur" <?php if(!empty($user['country']) && $user['country'] == 'Alirajpur'){echo"selected";}?>>Alirajpur</option>
                         </select>
                        
                       </div>
                       <div>
                            <select vlaue="category" name="category">
                            <option value="0">Cost</option>
                            <option value="gen"<?php if(!empty($user['category']) && $user['category'] == 'gen'){echo"checked";}?>>GEN</option>
                            <option value="obc"<?php if(!empty($user['category']) && $user['category'] == 'obc'){echo"checked";}?>>OBC</option>
                            <option value="st"<?php if(!empty($user['category']) && $user['category'] == 'st'){echo"checked";}?>>ST</option>
                            <option value="sc"<?php if(!empty($user['category']) && $user['category'] == 'sc'){echo"checked";}?>>SC</option>
                         </select>
                         <?=form_error('category')?>
                         </div>
                       <div class="col-md-6 col-lg-6 mb-3">
                               <tr>
                                <td><label for="address">Address:</label></td>
                                <td><textarea id="address" name="address"> <?php echo  $user['address'];?> </textarea></td>
                               </tr>
                        </div>
                    
                        <div class="col-md-6 col-lg-6 mb-3">
                         <div class="form-group">
                          <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/Crudcontroller/index';?>" class="btn-secondary btn">Cancle</a>
                     </div>
                   </div>
                </div>
                </form>
           </div>
        </body>
</html>