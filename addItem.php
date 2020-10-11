<link href="style\base.css" type="text/css" rel="stylesheet" />

<?php
include("header.php");
?>
<div id="myForm">

<form method="POST" action="insertItem.php">

<table align="center">
<tr><td>Enter Product Name</td><td><input type="text" name="PName"/></td></tr>
<tr><td>Enter Category</td><td><input type="text" name="Category"/></td></tr>
<tr><td>Enter Price</td><td><input type="text" name="Price"/></td></tr>
<tr><td height="50"><input type="submit" value="Add"/></td><td><input type="Reset" value="cancel"/></td></tr>
</table>
</form>

</div>
</div><!--closing of content-->

<?php

include("footer.php");

?>