

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 70px;">
    <a class="navbar-brand" href="#" style="font-size:30px">CodeIgniter</a>
  </nav>
    <div class="container">
        <form  class="col-sm-4 mx-auto" action="<?php echo base_url('index.php/users/update/'.$users['id']);?>" method="post"required>
            <h3 class="display-4 mt-5 text-center">Update Form</h3>
            <div class="form-group mt-4">
                <label>Name</label>
                <input type="text" name="name" id="name" value="<?= $users['name']?>" class="form-control"required>
                <small><?//php echo form_error('name');?></small>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" value="<?= $users['email'] ?>" class="form-control"required>
                <small><?//php echo form_error('email');?></small>

            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" id="address" value="<?= $users['address']?>" class="form-control" required>
                <?php //echo form_error('address');?>
            </div>
            <div class="footer mt-4">
            <button type="submit" class="btn btn-outline-primary">Add</button>
            <a href="<?=base_url('index.php/user')?>" class="btn btn-outline-info">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>


