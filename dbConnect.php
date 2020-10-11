<?php
$con=@mysql_connect("127.0.0.1","root","") or die("connect error");
@mysql_select_db("phones4you",$con) or die("database error");

?>