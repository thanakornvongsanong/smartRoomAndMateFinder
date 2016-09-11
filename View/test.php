<?php 
include "../model/user.php";
$user = User::findByid(700012);
print_r($user);
$user = $user->easyread();
echo $user->easyread()->gender;

 ?>