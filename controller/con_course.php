<?php 
$cs_img="images/12.png";
$cs_name="อบรมเชิงปฏิบัติการ<br/>การผลิตปุ๋ยมูลไส้เดือนดินเพื่อกำจัดขยะอินทรีย์และเพื่อการค้า";
$cs_date="30-31 ก.ค. 65";
$cs_wallet="1,990 บ.";
?>

<?php
$course=array();
$course["cs_img"]=$cs_img;
$course["cs_name"]=$cs_name;
$course["cs_date"]=$cs_date;
$course["cs_wallet"]=$cs_wallet;
print_r($course);
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Room();
echo $rs2= $obj_name->addRoom($room);
?>

<?php
include "../view/view_course_card.php";
?>
