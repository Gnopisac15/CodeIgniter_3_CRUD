<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 70px;">
    <a class="navbar-brand" href="#" style="font-size:30px">CodeIgniter</a>
  </nav>
    <div class="container mt-5">
    <h3 class="display-6">List of Users  <span><a href="<?=base_url()?>user/create" class="btn btn-outline-primary  mb-3" style="height:40px;width:100px;float:right">Add</a></span></h3>
        <?php if(!empty($this->session->flashdata('message'))){
            echo "<div class='alert alert-success mt-3'>".$this->session->flashdata('message')."</div>";
        }?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php if(!empty($users)){
           foreach($users as $row){
        ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><a href="<?=base_url('users/edit/'.$row['id']);?>" class="btn btn-outline-success">Edit</a>
        <a href="<?=base_url('users/delete/'.$row['id']);?>" class="btn btn-outline-danger">Delete</a>
        
        </td>
    </tr>
        <?php }
        }else{?>
            <tr>
                <td><h4 class="display-4 mx-auto"><em>No Records Found!</em> </h4></td>
            </tr>
        <?php }?>
  </tbody>
</table>
        
    </div>
</body>
</html>
