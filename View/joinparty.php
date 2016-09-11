<?php
include '../model/user.php';
session_start();
if($_GET["id"]==$_SESSION["user"]->userid){
    echo "You cannot you are sender";
    exit;
}

$id1 = $_GET["id"];
$id2 = $_GET["id2"];
$party = checkparty($id1);
if ($party == null) {
    $servername = "192.168.1.14";
    $username = "kawotat";
    $password = "1234";
    $dbname = "project";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $num = getLast();
    $sql = "INSERT INTO `party`(`user_id`, `party_id`) VALUES (" . $id1 . "," . $num . ")";
    $sql2 = "INSERT INTO `party`(`user_id`, `party_id`) VALUES (" . $id2 . "," . $num . ")";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
     $servername = "192.168.1.14";
    $username = "kawotat";
    $password = "1234";
    $dbname = "project";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `party`(`user_id`, `party_id`) VALUES (" . $id2 . "," . $party . ")";
       if ($conn->query($sql) === TRUE) {
           header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<?php

function checkparty($id) {
     $servername = "192.168.1.14";
    $username = "kawotat";
    $password = "1234";
    $dbname = "project";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select party_id from party  where user_id=" . $id;
    $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
    $name = null;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["party_id"];
    }

    $conn->close();
    return $name;
}

function getLast() {
   $servername = "192.168.1.14";
    $username = "kawotat";
    $password = "1234";
    $dbname = "project";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select max(party_id) as num from party ";
    $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
    $name = null;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["num"];
    }
    $name = $name+1;
    $conn->close();
    return $name;
}
?>