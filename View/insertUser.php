
<?php
include '/config.php';
include '../model/user.php';
session_start();

   
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   $fbdata = $_SESSION["fbdata"];

    $sql = "INSERT INTO `users`( `first_name`, `last_name`,`gender`, `fbid`, `clean_lvl`, `snoring`, `haveroom`, `smoke`, `status`, `party_lvl`, `description`, `country_id`, `job_id`, `city_id`, `email`, `religion_id` , `rent_cost`, `period`,`latitude`,`longitude`, `moving_date`,`birth_date`) VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$fbdata["gender"][0]."','".$fbdata["id"]."','".$_POST["clean_lvl"]."','".$_POST["snore"]."',".$_POST["room"].",'".$_POST["smoke"]."','".$_POST["status"]."','".$_POST["party_lvl"]."','".$_POST["description"]."',10001,3001,".User::getCityId($_POST["locality"]).",'".$_POST["email"]."',2001,".$_POST["rent_cost"].",'".$_POST["period"]."','".$_POST["lat"]."','".$_POST["lng"]."',STR_TO_DATE('".$_POST["movedate"]."','%Y-%m-%d'),STR_TO_DATE('".$_POST["birthday"]."','%Y-%m-%d'))";
    if ($conn->query($sql) === TRUE) {
        echo $sql;
    } else {
         echo $sql;
        exit;
    }
if($_POST["room"]==1){
     $_SESSION["user"] = User::findByFacebookid($fbdata["id"]);
    header('Location: Set_room.php');
}
else{
    header('Location: index.php');
}
    

?>

