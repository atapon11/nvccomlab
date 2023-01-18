<?php
include_once "../model/ConDB.php";
include_once "../model/Room.php";
$obj_name=new Room();
$rs2= $obj_name->getRoom($course);

$obj_id = new Room();
$rs= $obj_id->delRoom($id);

?>







<?php
include "../view/view_room_card.php";
?>
