
<?php
include("db.php");
session_start();
if(isset($_SESSION['email']))
{
include("head.php");
?>
<form action="insertItem.php" method="POST" enctype="multipart/form-data">
 <div class="form-group">
	 <div style="text-align: center; margin-top: 30px">

    <label><h3 style="font-style: italic;color:">Brand type</h3></label>
  </div>
   <div class="form-group">
  <select class="form-control"  name="brandtype">
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
    <input type="text" class="form-control" name="productname">
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">RAM | ROM</h3></label>
    <input type="text" class="form-control" name="ramrom" >
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Camera</h3></label>
    <input type="text" class="form-control" name="camera">
  </div>

  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Battery</h3></label>
    <input type="text" class="form-control" name="battery">
  </div>
  
  <div class="form-group">
    <div style="text-align: center;">
    <label><h3 style="font-style: italic;color: ">Sim specification</h3></label>
    <input type="text" class="form-control" name="spec">
  </div>
  <br>
  <br>
      <!--div class="form-group">
        <div style="text-align: center;">
    <label><h3 style="padding-left: 100px; font-style: italic;color: ">Product Image</h3></label>
          <input type="file"    name="file">
                        <input type="hidden" name="image">
                        <input type="hidden" name="id" >
       </div-->

  </div>



            
                <div class="row">
                 <div class="col-md-1"><button class="btn btn-primary" type="submit" name="edit">Submit</button></div>
                </div>
                
                
                    
            </form>

<?php
}
?>

            
