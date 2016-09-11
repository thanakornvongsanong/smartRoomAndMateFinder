<?php
include '../model/user.php';
session_start();
$a = $_SESSION["user"]->userid;
 $servername = "192.168.1.14";
    $username = "kawotat";
    $password = "1234";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select count(user_id1) as count from chat";
$count = null;
$result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
while ($row = mysqli_fetch_assoc($result)) {
    $count = $row["count"];
}
if ($count == null) {
    $sql2 = "select  * from chat where user_id1  =" . $a . " Order By chatdate DESC";
} else {
    $sql2 = "select  * from chat where user_id1  IN(" . $a . "," . $_POST["user_id"] . ") and user_id2 IN (" . $a . "," . $_POST["user_id"] . ") order by chatdate";
}
$result = mysqli_query($conn, $sql2) or die(mysql_error() . "555");
$id = array();
$message = array();
$date = array();
$id1 = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($date, $row["chatdate"]);
    array_push($id, $row["user_id2"]);
    array_push($message, $row["message"]);
    array_push($id1, $row["user_id1"]);
}

$conn->close();

for ($i = 0; $i < count($id); $i++) {
    $idd = User::findByid($id1[$i]);
    $image = 'https://graph.facebook.com/' . $idd->fbid . '/picture?width=200';
    if ($idd->userid != $a) {
        echo "<img src=" . $image . " style='height:50px;width:50px'></img>   " . $message[$i] . "                               " . "<br>";
    } else {
        echo "<p  dir='rtl' >".$message[$i]  .  " <img  dir='rtl' src=" . $image . " style='height:50px;width:50px;'></img> </p>";
    }
}
?>
