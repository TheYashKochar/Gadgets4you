

<?php
session_start();
                    include("db.php");
                    if(isset($_POST['submit']))
                    {
                    
                    $email=$_POST['email'];
                    $password= $_POST['password'];
                    if($email=='g4u@gmail.com')
                    {
                    $sql3= mysqli_query($conn,"select * from user where email='$email' and password='$password';");
                    if(mysqli_num_rows($sql3))
                    {
                        $_SESSION['email']=$email;
                        
                        header("Location: index2.php");
                        
                    }
                    else
                    {
                      ?>
            <script>
      window.location="login.php?id=210";  
      </script>
            <?php 
                    }
                    }
                    
                    else
                    {
                         ?>
            <script>
      window.location="login.php?id=210";  
      </script>
            <?php 
                    }
                    
                    
                    }
                    ?>