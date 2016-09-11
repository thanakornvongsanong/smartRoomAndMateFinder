<?php
include 'user.php';
$r = User::getByDistance($_POST["lat"],$_POST["long"],$_POST["check"]);
echo json_encode($r, JSON_UNESCAPED_UNICODE);
?>