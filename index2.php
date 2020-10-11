<?php
session_start();
if(isset($_SESSION['email']))
{
include("head.php");
?>
<div class="container">
    <div class="row">
        
        <center><!-- <img src="../images/emitra.jpg" style="margin-top: 150px; width:200px; height:300px; "> --></center>
    </div>
</div>
</div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php
}
else
{
    header("Location:login.php");
}


?>

