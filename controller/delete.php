<?php

 include_once "../model/ConDB.php";
 include_once "../model/Room.php";
 $room_id = $_GET["id1"];
 $obj_id = new Room();
 $rs= $obj_id->delRoom($room_id);
?>


<?php
 include "../view/view_room_card.php";
?>
