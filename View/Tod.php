<?php
include 'Room.php';
include 'user.php';
$r = Room::getRoomBydistance($_POST["lat"],$_POST["long"],$_POST["check"]);
echo json_encode($r, JSON_UNESCAPED_UNICODE);
?>