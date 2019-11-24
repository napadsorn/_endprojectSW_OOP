
<!DOCTYPE html">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<div class="content">
<?php  include "connect.php";  ?>	
<?php
function cutstr($str, $maxstr='', $holder='') {
if (strlen($str) > $maxstr) {$str = iconv_substr($str, 0, $maxstr, "UTF-8") . $holder;}
return $str;}?>
<table>
<?php
session_start(); //รับค่าไอดียุเซอจากตอนล้อกอิน
echo $_SESSION['userid'];//รับค่าไอดียูสเซอจากตอนล้อกอิน2
$userid = $_SESSION['userid'];
	
$result = mysqli_query($conn,"select * FROM data_participant RIGHT JOIN data_project ON data_participant.id_project = data_project.id_project WHERE id = '$userid' ");
	
if (!is_object($result)) {
    die(mysqli_error($conn));// แก้ตัวแปร $link ให้ถูกต้องเอาเอง
}
	
$i=0; // กำหนดให้ตัวแปร i = 0
	   
if (is_object($result)) {
while($row = mysqli_fetch_array($result)) {
$id_article = $row['id_project'];
$author = $row['leader'];
$title = $row['nameproject'];
$article = $row['detail'];
       

echo "<tr>";
echo "<td>";
echo "<div id='title'><h2>
<a href='show_article_full.php?id_project=$id_article'>
$title
</a></h2></div>";
echo "<div id='detail'>".cutstr($article,'300','...')."</div>";
echo "<div id='float_r'>
<a href='show_article_full.php?id_project=$id_article'>
Read More>>
</a></div>";

echo "</td>";
echo "</tr>";
$i++; //ก็ให้บวกเพิ่มไปจนเท่ากับ ตัวแปร num
 }}
?>
</table>

</div>
    </body>
</html>
