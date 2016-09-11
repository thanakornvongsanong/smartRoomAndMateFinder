<?php

include '../model/user.php';
include '/config.php';
session_start();
$user = $_SESSION["user"];
$sql = "INSERT INTO `room`( `user_id`, `room_size`, `city_id`, `another_detail`, `rent_cost`, `animal_allow`, `deposit`, `elec_cost`, `water_cost`, `type`, `longitude`, `latitude`, `room_name`, `max_member`,`area_name`) VALUES (" . $user->userid . "," . $_GET["room_size"] . "," . User::getCityId($_GET["locality"]) . ",'" . $_GET["another_detail"] . "'," . $_GET["rent_cost"] . "," . $_GET["petsallow"] . "," . $_GET["deposit"] . "," . $_GET["electronic_cost"] . "," . $_GET["water_cost"] . ",'" . $_GET["room_type"] . "','" . $_GET["lng"] . "','" . $_GET["lat"] . "','" . $_GET["name"] . "'," . $_GET["limit"] . ",'" . $_GET["sub_local"] . "')";
if ($conn->query($sql) === TRUE) {
    header('Location: searchUser.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
upload($_FILES['image'],$user->userid);
$accessory = $_GET["accessory"];
if (count($accessory) > 0) {
    $pieces = explode(",", $accessory);
    for ($i = 0; $i < count($pieces); $i++) {
        $sql2 = "insert into have_accessory (room_id,accessory_id) values(" . User::getRoomId($user->userid) . "," . User::getAccessoryId($pieces[$i]) . ")";
        if ($conn->query($sql2) === TRUE) {
            header('Location: searchUser.php');
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    }
}
    function upload($file,$filename) {
        if (isset($file)) {
            $errors = array();
            $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];
            $file_ext = strtolower(end(explode('.', $file['name'])));

            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../view/img/up/" . $filename.".".$file_ext);
                echo "Success";
            } else {
                print_r($errors);
            }
        }
    }


?>
