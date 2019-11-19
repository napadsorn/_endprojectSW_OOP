<?php include("connect.php"); ?>

<?php
//$result = mysqli_query("select * from user where id='$_SESSION[userid]'")or die(mysqli_error()) ;
//$dbarr = mysqli_fetch_array($conn,$result) ;

$member_id = $_REQUEST["member_id"];
$project_id = $_REQUEST["project_id"];
$sql_add = "insert into data_participant (id_project, id) values($project_id, $member_id)";

mysqli_query($conn , $sql_add) or die(mysqli_error());
if(sql_add)
	{
		
		echo "<script> alert('ลงทะเบียนเรียบร้อย')</script>;";
		$back_url = "หน้าแรกบุคคลทั่วไป.php";
		echo "<script language='javascript'>location='$back_url';</script>";
		echo "</script>";
	}
		else
		{
			echo "<script type = 'text/javascript'>";
		    echo "aleart('การลงทะเบียนผิดพลาด')";
		    echo "</script>";
		}
	

		
	

?>
