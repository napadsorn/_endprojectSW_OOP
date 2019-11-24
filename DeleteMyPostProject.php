<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	include("connect.php");
	$request = $_REQUEST["project_id"];
	$sql = "DELETE  FROM data_project WHERE id_project = '".$request."' ";
	$query = mysqli_query($conn,$sql);
	if (mysqli_affected_rows($conn))
	{
			echo "<script> alert('ลบข้อมูลแล้ว')</script>;";
		$back_url = "หน้าแรกบุคลากร.php";
		echo "<script language='javascript'>location='$back_url';</script>";
		echo "</script>";
	}
	
?>
</body>
</html>