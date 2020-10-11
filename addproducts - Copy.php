
<?php
include("../db.php");
session_start();
if(isset($_SESSION['email']))
{
include("head.php");
?>





<section class="content">
    <div class="box">
      
       <?php
       if(!empty($_GET['id']))
       {
           $getid=$_GET['id'];
            if($getid==210)
           {
               ?>
        <div class="alert alert-warning">
  Please Delete Images under the Product!
</div>
       <?php
           }
           if($getid==220)
           {
               ?>
        <div class="alert alert-success">
   Products has been updated successfully!
</div>
       <?php
           }
           if($getid==230)
           {
               ?>
        <div class="alert alert-danger">
 Error!
</div>
       <?php
           }
           else
           {
               echo"";
           }
       }
       
       ?>
      
       <div class="container">
          
            <?php
       if(isset($_GET['id']) && ($_GET['id']=='e') )
       {
           $id=$_GET['e'];
           
           $editsql=mysqli_query($conn,"select * from products where id='$id';");
           if(mysqli_num_rows($editsql)>0)
           {
               $editrow=mysqli_fetch_array($editsql);
           ?>
              <form action="<?php echo $_SERVER['PHP_SELF'];   ?>" method="POST" enctype="multipart/form-data">


 <div class="form-group">
    <div style="text-align: center; margin-top: 30px">

    <label><h3 style="font-style: italic;color:">Brand type</h3></label>
  </div>
   <div class="form-group">
  <select class="form-control"  name="brandtype">
       <option value="<?php echo $editrow['brandtype'];  ?>"><?php echo $editrow['brandtype'];  ?></option>
    <option>Apple</option>
    <option>Samsung</option>
    <option>Xiaomi</option>
    <option>OnePlus</option>
     <option>vivo</option>
      <option>oppo</option>
       <option>Google Pixel</option>
        <option>Huawei</option>
  </select>
</div> 
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Product Name</h3></label>
  </div>
    <input type="text" class="form-control" name="productname" value="<?php echo $editrow['productname'];?>">
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">RAM | ROM</h3></label>
    <input type="text" class="form-control" name="ramrom" value="<?php echo $editrow['ramrom'];?>" >
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Camera</h3></label>
    <input type="text" class="form-control" name="camera" value="<?php echo $editrow['camera'];?>">
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Battery</h3></label>
    <input type="text" class="form-control" name="battery" value="<?php echo $editrow['battery'];?>">
  </div>
  
  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Sim specification</h3></label>
    <input type="text" class="form-control" name="specification" value="<?php echo $editrow['spec'];?>">
  </div>
  <br>
  <br>
      <div class="form-group">
        <div style="text-align: center;">
    <label><h3 style="padding-left: 100px; font-style: italic;color: ">Product Image</h3></label>
          <input type="file"    name="file">
                        <input type="hidden" name="image" value="<?php echo $editrow['cover'];?>">
                        <input type="hidden" name="id" value="<?php echo $editrow['id'];?>">
       </div>

  </div>



            
                <div class="row">
                 <div class="col-md-1"><button class="btn btn-primary" type="submit" name="edit">Submit</button></div>
                </div>
                
                
                    
            </form>




            <?php
       }
       }
       
       else
       {
           
       ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];   ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <div style="text-align: center; margin-top: 30px">

    <label><h3 style="font-style: italic;color: ">Brand type</h3></label>
  </div>
   <div class="form-group">
  <select class="form-control" id="sel1" name="brandtype">
    <option>Apple</option>
    <option>Samsung</option>
    <option>Xiaomi</option>
    <option>OnePlus</option>
     <option>vivo</option>
      <option>oppo</option>
       <option>Google Pixel</option>
        <option>Huawei</option>
  </select>
</div> 
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Product Name</h3></label>
  </div>
    <input type="text" class="form-control" name="productname" placeholder="Enter Product name"  required>
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">RAM | ROM</h3></label>
    <input type="text" class="form-control" name="ramrom" placeholder="Enter RAM | ROM" required>
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Camera</h3></label>
    <input type="text" class="form-control" name="camera" placeholder="Enter Camera Specification" required>
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Battery</h3></label>
    <input type="text" class="form-control" name="battery" placeholder="Enter battery capacity" required>
  </div>
  
  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Sim specification</h3></label>
    <input type="text" class="form-control" name="specification" placeholder="Enter sim specification" required>
  </div>
  <br>
  <br>
      <div class="form-group">
        <div style="text-align: center;">
    <label><h3 style="padding-left: 100px; font-style: italic;color: ">Product Image</h3></label>
       <input type="file"   required name="file">
       </div>

  </div>
  <center><button type="submit" class="btn btn-primary" name="add">Submit</button></center>
</form> 

   <?php

$target_dir="../Upload/";
if(isset($_POST['add']))
{
$date= date("d-m-Y");
$brandtype=$_POST['brandtype'];
$productname=$_POST['productname'];
$ramrom=$_POST['ramrom'];
$camera=$_POST['camera'];
$battery=$_POST['battery'];
$specification=$_POST['specification'];



$file=$_FILES["file"]["name"];  

$file1=$_FILES["file"]["tmp_name"];
$type = pathinfo($file,PATHINFO_EXTENSION);
    if($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "JPEG" && $type != "JPG" && $type != "PNG")
    {
          
        ?>
            <script>
      window.location="addproducts.php?id=210";  
      </script>
      <?php
        
        
    }
    else{
$sql1= mysqli_query($conn, "insert into products(`brandtype`,`productname`,`ramrom`,`camera`,`battery`,`spec`,`cover`,`date`) values('$brandtype','$productname','$ramrom','$camera','$battery','$specification','$file','$date');");
 if($sql1)
    {
    $result1 = mysqli_query($conn,"SELECT MAX(id) AS max_page FROM products");
    $roww1 = mysqli_fetch_array($result1);
    $del=$roww1['max_page'];
    $file3=$del.".".$type;
    $sql2= mysqli_query($conn,"update products set cover='$file3' where id='$del'");
    move_uploaded_file($file1, $target_dir.$file3);
   
   
    if($sql2)
    {
        
        ?>
            <script>
      window.location="addproducts.php?id=220";  
      </script>
      <?php
    }
    else
    {
        ?>
            <script>
      window.location="addproducts.php?id=230";  
      </script>
      <?php 
    }
    }
}
    
    
    
    }

}

       



if(isset($_POST['edit']))
{
    $target_dir="../Upload/";



$id=$_POST['id'];
$brandtype=$_POST['brandtype'];
$productname=$_POST['productname'];
$ramrom=$_POST['ramrom'];
$camera=$_POST['camera'];
$battery=$_POST['battery'];
$specification=$_POST['specification'];


$image=$_POST['image'];
$file=$_FILES["file"]["name"];  

$file1=$_FILES["file"]["tmp_name"];
if(!empty($file))
{
$type = pathinfo($file,PATHINFO_EXTENSION);
    if($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "JPEG" && $type != "JPG" && $type != "PNG")
    {
          
        ?>
            <script>
      window.location="addproducts.php?id=210";  
      </script>
      <?php
        
        
    }
    else{


    $file3=$id.".".$type;
    $sqlw= mysqli_query($conn,"update products set brandtype='$brandtype', productname='$productname', ramrom='$ramrom', camera='$camera', battery='$battery', spec='$specification', cover='$file3' where id='$id'");
    move_uploaded_file($file1, $target_dir.$file3);
   
   
    if($sqlw )
    {
        
        ?>
            <script>
      window.location="addproducts.php?id=220";  
      </script>
      <?php
    }
    else
    {
        ?>
            <script>
      window.location="addproducts.php?id=230";  
      </script>
      <?php error_reporting( E_ALL ); ?>
      <?php 
    }
    
}
}
else
{
 $sql2= mysqli_query($conn,"update products set brandtype='$brandtype', productname='$productname', ramrom='$ramrom', camera='$camera', battery='$battery', spec='$specification', cover='$image' where id='$id'");
   
   
   
    if($sql2)
    {
        echo $edit;
        
        ?>
            <script>
      window.location="addproducts.php?id=220";  
      </script>
      <?php
    }
    else
    {
        ?>
        <?php error_reporting( E_ALL ); ?>
            <script>
      window.location="addproducts.php?id=230";  
      </script>
      <?php 
    }   
}
    
    
    }


?>
           
           
           
          
       
 <section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Products List</h3>

          
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                 
               
                  <th>Brand Type</th>
                  <th>Product Name</th>
                  <th>RAM | ROM</th>
                  <th>Camera</th>
                  <th>Battery</th>
                 <th>Specification</th>
                 <th>Image</th>
                 <th style="width: 100px;" >Date</th>
                 <th>Edit</th>
                
                </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1= mysqli_query($conn, "select * from products order by id desc ;");
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
                       <td><a href="../Upload/<?php echo $row['image'];  ?>" target="_blank"><img src="../Upload/<?php echo $row['cover'];  ?>" style="height:auto; width:30%;"></a></td>
                        <td><?php echo $row['date'];  ?></td>
                      
                    
                            
                           
                            
                            
                    <!--     <td><a href="delete-products.php?id=d&e=<?php echo $id;?>"><i class="fa fa-trash-o" aria-hidden="true" style="float: left;"></i>Delete</a></td> -->
                   <!--          <a href="add-products.php?id=e&e=<?php echo $id;?>"><i class="fa fa-pencil" aria-hidden="true" ></i></a> --></td>
                                  <td><a href="addproducts.php?id=e&e=<?php echo $id;?>"><i class="fa fa-trash-o" aria-hidden="true" style="float: left;"></i>Edit</a></td>
                  
</td>
                    </tr>  
                              
                              <?php
                            
                            
                        }
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
