
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
                 <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                        <div class="col-6"><h3>View Users</h3></div>
                        <div class="col-6 text-right">
                        <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
                       </div>
                        </div>
                    </div>  
                 <h3> View Student details</h3>
                 <hr>
                 <div class="row">
                 <table class="table table-bordered">
                 <tr class="bg-info ">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Hobby</th>
                    <th>City</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                 </tr>
                <?php if(!empty($users)){
                    foreach ($users as $user){?>
                    <tr>
                    <td><?=$user['user_id']?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['gender']?></td>
                    <td><?=$user['hobby']?></td>
                    <td><?=$user['city']?></td>
                    
                    <td>
                        <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>"class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>"class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }}else{?>
                <tr>
                    <td>NO Record found</td>
                </tr>
                <?php } ?>
            </table>
  
         </div>
                 
                    

</body>
</html>
                 
                    