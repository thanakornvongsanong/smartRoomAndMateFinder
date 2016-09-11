<?php
include '/user.php';
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$a = $_SESSION["user"]->userid;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from chat where user_id1  =" .$a ;

$result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
;
$id = array();
$message = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($id, $row["user_id2"]);
    array_push($message, $row["message"]);
}

$conn->close();
for($i = 0;$i<count($id);$i++){
    echo $id[$i]."   ".$message[$i]."<br>";
    
}
?>