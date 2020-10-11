<?php
include("../db.php");
if(isset($_GET['id'])&& $_GET['e'])
{
    if($_GET['id']=='d')
    {
        $id=$_GET['e'];
        $sql= mysqli_query($conn, "delete from products where id=$id;");
        if($sql)
        {
            header("location:products-list.php?id=220");
        }
 else {
     header("location:products-list.php?id=230");
 }
       
    }
}
    



?>