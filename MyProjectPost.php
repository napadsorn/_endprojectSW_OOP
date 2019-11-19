<!DOCTYPE html">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
	<?php  include "connect.php";  ?>
<?php include "แถบเมนูบุคลากร.php"; ?>
<div class="content">

<?php
function cutstr($str, $maxstr='', $holder='') {
if (strlen($str) > $maxstr) {
$str = iconv_substr($str, 0, $maxstr, "UTF-8") . $holder;
}
return $str;
}
?>

<table>
<?php
//session_start(); //รับค่าไอดียุเซอจากตอนล้อกอิน
$userid = $_SESSION['userid'];

$result = mysqli_query($conn,"select * from data_project WHERE author='$userid'");
$num = mysqli_num_rows($result);//นับแถวทั้งหมดในตารางออกมา

$i=0; // กำหนดให้ตัวแปร i = 0
while($i < $num){ //ถ้า ตัวแปร i น้อยกว่า ตัวแปร num

$row = mysqli_fetch_array($result);
$id_article = $row['id_project'];
$author = $row['leader'];
$title = $row['nameproject'];
$article = $row['detail'];

echo "<tr>";
echo "<td>";

echo "<div id='title'><h2>
<a href='MyProjectPost_ShowArticleFull.php?id_project=$id_article'>
$title
</a></h2></div>";
echo "<div id='detail'>".cutstr($article,'300','...')."</div>";
echo "<div id='float_r'>
<a href='MyProjectPost_ShowArticleFull.php?id_project=$id_article'>
Read More>>
</a></div>";

echo "</td>";
echo "</tr>";
$i++; //ก็ให้บวกเพิ่มไปจนเท่ากับ ตัวแปร num
}
?>
</table>

</div>
    </body>
</html>
