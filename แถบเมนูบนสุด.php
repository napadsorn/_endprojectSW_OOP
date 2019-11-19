<?php 
    //session_start();
    if (!$_SESSION['userid']) {
        header("Location: หน้าแรกแบบทั่วไป.php");
    } else {
?>
    <div class="fl_right">
	  
      <ul> 
        <li><h3>สวัสดี   <?php echo $_SESSION['user'];?></h3> </li>
        <li>
          
        </li>
        <li>
         
          <h3><a href="logoutb.php">ออกจากระบบ</a></h3>
        </li>
      </ul>
    </div>
    <?php } ?>