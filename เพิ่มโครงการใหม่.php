<?php
    include "connect.php";

    //conndb();

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>KramDinDam.com</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body >
	<?php
    include "แถบเมนูบุคลากร.php";
?>
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-13"> <br />
      <h4 align="center"> เพิ่มโครงการใหม่ </h4>
      <hr />
      <form action="เพิ่มข้อมูลโครงการลงdata_project.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
      
       <div class="form-group">
          <div class="col-sm-12">
            <p>ชื่อโครงการ</p>
            <p>
              <input type="text"  name="namepro" class="form-control" required placeholder="ชื่อโครงการ" />
              <br>
            </p>     
                           
                                     
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-sm-12">
            <p> หัวหน้าทีมวิจัย</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="หัวหน้าทีมวิจัย" />
          </div>
        </div>
		  
       <div class="form-group">
          <div class="col-sm-12">
            <p> ผู้ร่วมวิจัย</p> 
			  <?php //include("selectname.php"); ?>
			   <textarea  name="p_team" class="form-control"  rows="10"  required placeholder="ผู้ร่วมโครงการ"></textarea>
			  </div>
        </div>
        

			 
     
        
        <div class="form-group">
          <div class="col-sm-12">
            <p>รายละเอียดโครงการ</p>
            <p>
              <textarea  name="p_detail" class="form-control"  rows="20"  required placeholder="รายละเอียดโครงการ"></textarea>
            </p>
            <p>โปรดเลือก
              <label for="select">อำเภอ</label>
              <select name="where" >
                <option value="อำเภอกุดบาก">อำเภอกุดบาก</option>
				  <option value="อำเภอกุสุมาลย์">อำเภอกุสุมาลย์</option>
				  <option value="อำเภอโคกศรีสุพรรณ">อำเภอโคกศรีสุพรรณ</option>
				   <option value="อำเภอคำตากล้า">อำเภอคำตากล้า</option>
				   <option value="อำเภอเจริญศิลป์">อำเภอเจริญศิลป์</option>
				   <option value="อำเภอเต่างอย">อำเภอเต่างอย</option>
				   <option value="อำเภอนิคมน้ำอูน">อำเภอนิคมน้ำอูน</option>
				   <option value="อำเภอบ้านม่วง">อำเภอบ้านม่วง</option>
				   <option value="อำเภอโพนนาแก้ว">อำเภอโพนนาแก้ว</option>
				   <option value="อำเภอพรรณานิคม">อำเภอพรรณานิคม</option>
				   <option value="อำเภอพังโคน">อำเภอพังโคน</option>
				   <option value="อำเภอภูพาน">อำเภอภูพาน</option>
				   <option value="อำเภอเมืองสกลนคร">อำเภอเมืองสกลนคร</option>
				   <option value="อำเภอวาริชภูมิ">อำเภอวาริชภูมิ</option>
				   <option value="อำเภอสว่างแดนดิน">อำเภอสว่างแดนดิน</option>
				   <option value="อำเภอส่องดาว">อำเภอส่องดาว</option>
				   <option value="อำเภออากาศอำนวย">อำเภออากาศอำนวย</option>
				   <option value="อำเภอวานรนิวาส">อำเภอวานรนิวาส</option>
              </select>
            </p>
            <p>สถานที่สำหรับเข้าร่วมงาน
               <input type="text" name="where" rows="3" class="form-control">
            </p>
          </div>
          <p>&nbsp;</p>
        </div>
		  
		  <?php
         $strSQL ="select MAX(id_project) AS Num from data_project ";
         $objQuery = mysqli_query($conn,$strSQL) or die ("Error in query: $strSQL " . mysqli_error());
         $objResult = mysqli_fetch_array($objQuery);
         if($objResult)
           {
	        $num = $objResult['Num'];
	         if($num==NULL){
	         $num = 0;			
	       }
	        $newid = $num+1 ; // id+1
           }?>
        <input type="hidden" name="txt_sent_item_id" id="txt_sent_item_id" value="<?=$newid?>" style="width:25px; text-align:right;" readonly>
       
		
	      <?php  $userid = $_SESSION['userid']; ?>
			  <input type="hidden" name="author" id="author" value="<?=$userid?>" />
        
        <div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" align ="center" name="btnadd"> ประกาศ</button>
          </div>

          <li class="nav-item">
                              <a href="หน้าแรกบุคลากร.php" align ="center"> กลับหน้าหลัก </a>
          </li>
         </div>

        </div>
      </form>
    </div>
  </div>
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