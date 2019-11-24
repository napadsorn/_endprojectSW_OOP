<!doctype html>

<html>
<head>
<title>Algenius</title>
<meta charset="utf-8">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
body,td,th {
    font-size: 16px;
}
</style><form></form>
</head>
	<?php 
    session_start();
//echo "".$_SESSION['userid']."";  แสดงเลขไอดี
?>

<!DOCTYPE html">
<?php  include "แถบเมนูคนทั่วไป.php";  ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">

		<style>
			input.btn  {
                        width: 200px;
                        margin: 0 auto;
                        display: block;
                       }
		</style>
    </head>
	
    <body>	
		<form class ="box" action="บันทึกไอดีผู้ใช้ไปที่ตาราง.php" method="get">
<div class="content">
<?php
include 'connect.php';
 
$id_article = $_GET['id_project'];//รับค่า id_project
 
//$sql = "select * from data_project where id_project = '$id_article' order by id_project";
//$result = mysqli_query($sql);
	$result = mysqli_query($conn,"select * from data_project where id_project = '$id_article' order by id_project");
$row = mysqli_fetch_array($result);
$id_article = $row['id_project'];
$author = $row['leader'];
$title = $row['nameproject'];
$article = $row['detail'];
$dis = $row['district'];
$lo = $row['location'];
$team = $row['team'];
	
?>

<table>
<?php
	
echo "<tr>";
echo "<td>";
 
echo "<div id='nameproject'><h2>$title</h2></div>";	 //ชื่อโครงการ 
echo "หัวหน้าทีมวิจัย <div id='leader'>$author</div>"; //หัวหน้าทีมวิจัย
		echo"<BR></BR>";
	
echo "ผู้ร่วมวิจัย <div id='leader'>$team</div>"; //หัวหน้าทีมวิจัย
		echo"<BR></BR>";
	
echo "รายละเอียดโครงการ <div id='detail'>$article</div>"; //รายละเอียด
	echo"<BR></BR>";
	
echo "อำเภอ <div id='district'>$dis</div>";
	echo"<BR></BR>";
	
echo "สถานที่ที่ลงพื้นที่ <div id='location'>$lo</div>";
		echo"<BR></BR>";
echo " <div id='float_r'><font color='#64711F'>Post By:</font> $author</div>";
 
echo "</td>";
echo "</tr>";
?>
</table>
</div>
		<div>			
			
		<input type="hidden" name="member_id" id="member_id" value="<?=$_SESSION['userid']?>"/>
		<input type="hidden" name="project_id" id="project_id" value="<?=$_GET['id_project']?>"/>
<input type="submit" name="submit" id="submit" class="btn" align ="center" onclick="return confirm('ยืนยันการลงทะเบียนเข้าร่วมโครงการ')"value="ลงทะเบียนร่วมโครงการ" ;/>
	</div>
		
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
    </body>
</html>