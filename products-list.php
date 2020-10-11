
<?php
include("db.php");
session_start();
if(isset($_SESSION['email']))
{
include("head.php");
?>




<br>
<br>
       <?php
       if(!empty($_GET['id']))
       {
           $getid=$_GET['id'];
           if($getid==220)
           {
               ?>
        <div class="alert alert-success">
   Product has been deleted successfully!
</div>
       <?php
           }
   
       }
       
       ?>
 <section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Product List</h3>

          
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.NO.</th>
                 
                <th>Brandtype</th>
                 <th>Productname</th>
              <th>RAM | ROM</th>
              <th>Camera</th>
              <th>Battery</th>
              <th>Spec</th>
                 <th>Image</th>
                 <th>Data</th>  
                 <th>Action</th>              
                                 </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1= mysqli_query($conn, "select * from products;");
                    if(mysqli_num_rows($sql1) > 0)
                    {
                        $i=0;
                        while ($row = mysqli_fetch_array($sql1)) {
                            $i++;
                            $id=$row['id'];
                          ?>
                    <tr>
                        <td><?php echo $i;  ?></td>
                         
                           <td><?php echo $row['brandtype'];  ?></td>
                           <td><?php echo $row['productname'];  ?></td>
                           <td><?php echo $row['ram-rom'];  ?></td>
                           <td><?php echo $row['camera'];  ?></td>
                           <td><?php echo $row['battery'];  ?></td>
                           <td><?php echo $row['spec'];  ?></td>
                         <td><img src="Upload/<?php echo $row['image'];   ?>" class="thunmnail" style="height: 90px; width: 120px;"></a></td>                           <td><?php echo $row['date'];  ?></td>
     
                        
                                              <td><a href="delete-products.php?id=d&e=<?php echo $id;?>"><i class="fa fa-trash-o" aria-hidden="true" style="float: left;"></i>Delete</a>
                            
                          
</td>
             </tr>  
                              
                              <?php
                            
                            
                        }
                    }
                    else{
                      echo "no records";
                    }
                    
                    
                    ?>
                    
                    
                    
                    
                </tbody></table>
        </div>
        <div class="box-footer">
            
        </div>
    </div>
</section>





<?php
}
else
{
    header("Location:login.php");
}


?>
