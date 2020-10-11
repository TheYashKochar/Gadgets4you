<?php
include("header.php");
include("db.php");
?>

<div class="container">
<div class="row">
<div class="col-md-7">

   <?php
                    $sql1= mysqli_query($conn, "select * from products where brandtype='Google Pixel';");
                    if(mysqli_num_rows($sql1) > 0)
                    {
                        $i=0;
                        while ($row = mysqli_fetch_array($sql1)) {
                            $i++;
                            $id=$row['id'];
                          ?>
                      <img  src="Upload/<?php echo $row['image'];   ?>" class="thunmnail"  >
                      <?php
                                 }
                    }
                    
                    
                    ?>    
</div>
<div class="col-md-5" >
   <?php
                    $sql1= mysqli_query($conn, "select * from products where brandtype='Google Pixel';");
                    if(mysqli_num_rows($sql1) > 0)
                    {
                        $i=0;
                        while ($row = mysqli_fetch_array($sql1)) {
                            $i++;
                            $id=$row['id'];
                          ?>
                          <div style="padding:5em;">
                          <ul>
                         
                           <li><h2><?php echo $row['productname'];  ?></h2></li>
                           <li><h3><?php echo $row['ram-rom'];  ?></h3></li>
                           <li><h3><?php echo $row['camera'];  ?></h3></li>
                           <li><h3><?php echo $row['battery'];  ?></h3></li>
                           <li><h3><?php echo $row['spec'];  ?></h3></li>
</ul></div>
  <?php
                            
                            
                        }
                    }
                    
                    
                    ?>

</div>
</div>
</div>
 <?php
include("footer.php");
?>

