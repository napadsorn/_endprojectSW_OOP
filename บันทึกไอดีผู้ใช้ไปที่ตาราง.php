<?php include("connect.php"); ?>

<?php
$result = mysqli_query("select * from user where id='$_SESSION[id]'")or die(mysqli_error()) ;
 
$dbarr = mysqli_fetch_array($conn,$result) ;
$member_id = $_POST["id"];



$sql_add = "insert into data_participant (id) values('$member_id')";

mysqli_query($conn , $sql_add) or die(mysqli_error());

?>
