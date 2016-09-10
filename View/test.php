<?php 
include "../model/user.php";

        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select city_name from city " ;

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["city_name"];
        }

 ?>