
<?php
session_start();
if(!isset($_SESSION['email']))
{
 
  
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gadgets4you</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


    <?php
       if(!empty($_GET['id']))
       {
           $getid=$_GET['id'];
           if($getid==210)
           {
               ?>
        <div class="alert alert-danger">
  Username or Password is Incorrect !
</div>
       <?php
           }
          
           
  
       }
       
?>   

   

   
    <!-- /.social-auth-links -->
<div class="container" style="padding-top: 5em;">
  <center><h2>Login Form</h2></center>
  <form action="afterlogin.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
  
</body>
</html>
<?php
}
else
{
    header("location:index2.php");
}
?>