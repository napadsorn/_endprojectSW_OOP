<!doctype html>
<?php
require_once('connect.php');
 session_start(); //รับค่าไอดียุเซอจากตอนล้อกอิน
    
	//รับชื่อไฟล์จากฟอร์ม 
    $userid = $_SESSION['userid'];
	$namepro = $_POST['namepro'];
	$p_name = $_POST['p_name'];
    $p_team = $_POST['p_team']; 
	$p_detail = $_POST['p_detail'];
	$where = $_POST['where'];
    

	
 
	$sql ="INSERT INTO data_project
					(nameproject,leader,team,detail,district,author) 
					VALUES
					('$namepro',
					'$p_name',
					'$p_team',
					'$p_detail',
					'$where',
					'$userid')";
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
	//table2
	/*$sql2 =  "INSERT INTO producer
					(name, 
					byWhere) 
					VALUES
					('$produ_n',
					'$p_where')";
	$result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());*/
 
 
 
	//if($conn->query($sql) === TRUE)
	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มข้อมูลโครงการเรียบร้อย');";
			echo "window.location='เพิ่มโครงการใหม่.php';";
			echo "</script>";
	  }
	  else{
            echo "<script type='text/javascript'>";
            echo  "alert('เกิดข้อผิดพลาดกรุณาตรวจสอบข้อมูลอีกครั้ง');";
				echo "window.location='เพิ่มโครงการใหม่.php';";
			echo "</script>";
	  }
	
	
 ?>
 